tRatio();
    final double targetContrastRatio = this.targetContrastRatio(fontSize, bold: isBold);

    if (contrastRatio - targetContrastRatio >= _tolerance) {
      return const Evaluation.pass();
    }
    return Evaluation.fail(
      '$node:\n'
      'Expected contrast ratio of at least $targetContrastRatio '
      'but found ${contrastRatio.toStringAsFixed(2)} '
      'for a font size of $fontSize.\n'
      'The computed colors was:\n'
      'light - ${report.lightColor}, dark - ${report.darkColor}\n'
      'See also: '
      'https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html',
    );
  }

  /// Returns whether node should be skipped.
  ///
  /// Skip routes which might have labels, and nodes without any text.
  bool shouldSkipNode(SemanticsData data) =>
      data.hasFlag(ui.SemanticsFlag.scopesRoute) ||
      (data.label.trim().isEmpty && data.value.trim().isEmpty);

  /// Returns if a rectangle of node is off the screen.
  ///
  /// Allows node to be of screen partially before culling the node.
  bool isNodeOffScreen(Rect paintBounds, ui.FlutterView window) {
    final Size windowPhysicalSize = window.physicalSize * window.devicePixelRatio;
    return paintBounds.top < -50.0 ||
           paintBounds.left < -50.0 ||
           paintBounds.bottom > windowPhysicalSize.height + 50.0 ||
           paintBounds.right > windowPhysicalSize.width + 50.0;
  }

  /// Returns the required contrast ratio for the [fontSize] and [bold] setting.
  ///
  /// Defined by http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html
  double targetContrastRatio(double? fontSize, {required bool bold}) {
    final double fontSizeOrDefault = fontSize ?? _kDefaultFontSize;
    if ((bold && fontSizeOrDefault >= kBoldTextMinimumSize) ||
        fontSizeOrDefault >= kLargeTextMinimumSize) {
      return kMinimumRatioLargeText;
    }
    return kMinimumRatioNormalText;
  }

  @override
  String get description => 'Text contrast should follow WCAG guidelines';
}

/// A guideline which verifies that all elements specified by [finder]
/// meet minimum contrast levels.
///
/// See also:
///  * [AccessibilityGuideline], which provides a general overview of
///    accessibility guidelines and how to use them.
class CustomMinimumContrastGuideline extends AccessibilityGuideline {
  /// Creates a custom guideline which verifies that all elements specified
  /// by [finder] meet minimum contrast levels.
  ///
  /// An optional description string can be given using the [description] parameter.
  const CustomMinimumContrastGuideline({
    required this.finder,
    this.minimumRatio = 4.5,
    this.tolerance = 0.01,
    String description = 'Contrast should follow custom guidelines',
  }) : _description = description;

  /// The minimum contrast ratio allowed.
  ///
  /// Defaults to 4.5, the minimum contrast
  /// ratio for normal text, defined by WCAG.
  /// See http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html.
  final double minimumRatio;

  /// Tolerance for minimum contrast ratio.
  ///
  /// Any contrast ratio greater than [minimumRatio] or within a distance of [tolerance]
  /// from [minimumRatio] passes the test.
  /// Defaults to 0.01.
  final double tolerance;

  /// The [Finder] used to find a subset of elements.
  ///
  /// [finder] determines which subset of elements will be tested for
  /// contrast ratio.
  final Finder finder;

  final String _description;

  @override
  String get description => _description;

  @override
  Future<Evaluation> evaluate(WidgetTester tester) async {
    // Compute elements to be evaluated.
    final List<Element> elements = finder.evaluate().toList();
    final Map<FlutterView, ui.Image> images = <FlutterView, ui.Image>{};
    final Map<FlutterView, ByteData> byteDatas = <FlutterView, ByteData>{};

    // Collate all evaluations into a final evaluation, then return.
    Evaluation result = const Evaluation.pass();
    for (final Element element in elements) {
      final FlutterView view = tester.viewOf(find.byElementPredicate((Element e) => e == element));
      final RenderView renderView = tester.binding.renderViews.firstWhere((RenderView r) => r.flutterView == view);
      final OffsetLayer layer = renderView.debugLayer! as OffsetLayer;

      late final ui.Image image;
      late final ByteData byteData;

      // Obtain a previously rendered image or render one for a new view.
      await tester.binding.runAsync(() async {
        image = images[view] ??= await layer.toImage(
          renderView.paintBounds,
          // Needs to be the same pixel ratio otherwise our dimensions
          // won't match the last transform layer.
          pixelRatio: 1 / view.devicePixelRatio,
        );
        byteData = byteDatas[view] ??= (await image.toByteData())!;
      });

      result = result + _evaluateElement(element, byteData, image);
    }

    return result;
  }

  // How to evaluate a single element.
  Evaluation _evaluateElement(Element element, ByteData byteData, ui.Image image) {
    final RenderBox renderObject = element.renderObject! as RenderBox;

    final Rect originalPaintBounds = renderObject.paintBounds;

    final Rect inflatedPaintBounds = originalPaintBounds.inflate(4.0);

    final Rect paintBounds = Rect.fromPoints(
      renderObject.localToGlobal(inflatedPaintBounds.topLeft),
      renderObject.localToGlobal(inflatedPaintBounds.bottomRight),
    );

    final Map<Color, int> colorHistogram = _colorsWithinRect(byteData, paintBounds, image.width, image.height);

    if (colorHistogram.isEmpty) {
      return const Evaluation.pass();
    }

    final _ContrastReport report = _ContrastReport(colorHistogram);
    final double contrastRatio = report.contrastRatio();

    if (contrastRatio >= minimumRatio - tolerance) {
      return const Evaluation.pass();
    } else {
      return Evaluation.fail(
        '$element:\nExpected contrast ratio of at least '
        '$minimumRatio but found ${contrastRatio.toStringAsFixed(2)} \n'
        'The computed light color was: ${report.lightColor}, '
        'The computed dark color was: ${report.darkColor}\n'
        '$description',
      );
    }
  }
}

/// A class that reports the contrast ratio of a part of the screen.
///
/// Commonly used in accessibility testing to obtain the contrast ratio of
/// text widgets and other types of widgets.
class _ContrastReport {
  /// Generates a contrast report given a color histogram.
  ///
  /// The contrast ratio of the most frequent light color and the most
  /// frequent dark color is calculated. Colors are divided into light and
  /// dark colors based on their lightness as an [HSLColor].
  factory _ContrastReport(Map<Color, int> colorHistogram) {
    // To determine the lighter and darker color, partition the colors
    // by HSL lightness and then choose the mode from each group.
    double totalLightness = 0.0;
    int count = 0;
    for (final MapEntry<Color, int> entry in colorHistogram.entries) {
      totalLightness += HSLColor.fromColor(entry.key).lightness * entry.value;
      count += entry.value;
    }
    final double averageLightness = totalLightness / count;
    assert(!averageLightness.isNaN);

    MapEntry<Color, int>? lightColor;
    MapEntry<Color, int>? darkColor;

    // Find the most frequently occurring light and dark color.
    for (final MapEntry<Color, int> entry in colorHistogram.entries) {
      final double lightness = HSLColor.fromColor(entry.key).lightness;
      final int count = entry.value;
      if (lightness <= averageLightness) {
        if (count > (darkColor?.value ?? 0)) {
          darkColor = entry;
        }
      } else if (count > (lightColor?.value ?? 0)) {
        lightColor = entry;
      }
    }

    // If there is only single color, it is reported as both dark and light.
    return _ContrastReport._(
      lightColor?.key ?? darkColor!.key,
      darkColor?.key ?? lightColor!.key,
    );
  }

  const _ContrastReport._(this.lightColor, this.darkColor);

  /// The most frequently occurring light color. Uses [Colors.transparent] if
  /// the rectangle is empty.
  final Color lightColor;

  /// The most frequently occurring dark color. Uses [Colors.transparent] if
  /// the rectangle is empty.
  final Color darkColor;

  /// Computes the contrast ratio as defined by the WCAG.
  ///
  /// Source: https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html
  double contrastRatio() => (lightColor.computeLuminance() + 0.05) / (darkColor.computeLuminance() + 0.05);
}

/// Gives the color histogram of all pixels inside a given rectangle on the
/// screen.
///
/// Given a [ByteData] object [data], which stores the color of each pixel
/// in row-first order, where each pixel is given in 4 bytes in RGBA order,
/// and [paintBounds], the rectangle, and [width] and [height],
//  the dimensions of the [ByteData] returns color histogram.
Map<Color, int> _colorsWithinRect(
    ByteData data,
    Rect paintBounds,
    int width,
    int height,
) {
  final Rect truePaintBounds = paintBounds.intersect(Rect.fromLTWH(0.0, 0.0, width.toDouble(), height.toDouble()));

  final int leftX = truePaintBounds.left.floor();
  final int rightX