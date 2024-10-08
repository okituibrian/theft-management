<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2021 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn\AuthenticationExtensions;

use Exception;
use Throwable;

class ExtensionOutputError extends Exception
{
    /**
     * @var AuthenticationExtension
     */
    private $authenticationExtension;

    public function __construct(AuthenticationExtension $authenticationExtension, string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->authenticationExtension = $authenticationExtension;
    }

    public function getAuthenticationExtension(): AuthenticationExtension
    {
        return $this->authenticationExtension;
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ���� JFIF      �� �Photoshop 3.0 8BIM     h( bFBMD0a000a6e01000029020000200300005d030000b8030000e50400003b06000082060000c40600001b070000c5090000 �� C 


		
%# , #&')*)-0-(0%()(�� C



(((((((((((((((((((((((((((((((((((((((((((((((((((��  ` `" ��               ��              ��    � ���]�e�]�����發�y�&iSMh�D�V�Æ��	���7FlN��+H����t��g��Gk�dd  �I��e�jjg	���c^�j+U��s�\�w��\�1�<� ����<*�NkF�Sl�h��/�� $           0!A��  ܐ�:q��RM�R)�:oMs^:�3�@�_�eĒ��8���v?Q<��Y��˙��;��&�s���5q��PV���6����6�����!��E�h�>���5i����o�L�xT'sb�I+TBc�~�#�nVс�md�2�k�%�/~J����gÍOV#����>�)�=���IPc�Ϊ��\h�k����b��{�kщ�|x�ckW?��              @�� ?���cFu\�Q�n;lܣ2ex��              Q0�� ?5F�q�\_�rqVx岱>V���ǳػ����� 0        !1"0Qa#23Aq� B��Rbr���  ?�s�;U���� Y�����u��.���4�[U������bN�	��:��b�/�\� zlNDkmFkR3����=�gӬ����}���c�H��ʑ ��3��o�O(�Y�~��c���OH����U�� �v�h��A;Kn�����72�%͌4���#:�c�}��E%�@Nү����QJȮ��-�T����7�XsLf�2��x��Gr-/�T9.&wIc��W�~g�~g�~g�~f�/��������� '         !1AQ�q��a��� �����  ?!�ɩ&X�$��h�?�{L��,��ҿK�Xh�g���+*:��%I� ��-5��됻,Q�z#K����Ebȹ�5��M�<�CN�w���w�FI�נc�1�&1���3��ٍ,ʑ��1��P��Q'�F�e�&P����6NX�{os�I'��Ƙ�|��i��p��y)�"Y<�+�R��ž��)5�f%�@�64~���7�Ǝ��N4��DVt@��j`V���b�&����n�����>L>��4i;8�!-��M��89�9b�s�\��#�h��z��1����݉�W�X���W�J�H>�}`AA�$���D�vG��~��      �u��NWu�Ԧ1ό>�]�0u���.����               01aA�� ?++�z��VA?0kDT�ء�x;!1��              !1A�Qa�� ?�\c�������y�kl� ��9,���&�����JU���� '       !1AQaq�𑡱��� ���  ?��� wb7_e�,%����a��Ͷ����7��3����� �@� ��5���=�����C�-Uʁj�m����x��������sx��j����SɆp�@w�K@OM���jZ�H��p�*�W�pF���*�4ᤃ�b����B@B�܈�՚ji���\���X��彥�N�R8�q�2q� ��⭫/ӓ���a���6c�Ϙ�����4/�i�?��y��X�l���cFv���	���>����:�����R�����Eb����p6�z� ���ݙ���g�T��="@�۹�l��1����@�*8�T(��fi]=� �+3fh-��h�qz�(��-:-�nJENw��Do�b�R���a/tb�):��
�|��?�F�C��e^ȋ��� R�Hq�s��-7�Z��9�4g�a4\��wQxk���E`u��7.0�_�n��bn�,��D��\n2@��/�b&�;
�/N1G' z YN���
��'E�4��Ċ��	�E���9�e�f ����Ԕ � �u�(qM�t���*6k��<�e��s�p:�uc �7�5ԋ-k�H����WZ��c�@ɽ4��v��$��\�T7�*i�}^�r(�@��=�<{�x���︗c�<
��o�K	�7]��^���K� 4?���                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ���� JFIF      �� �Photoshop 3.0 8BIM     h( bFBMD0a000a6f01000055020000e60300008a0400002c05000042070000e1090000320a0000f60a00009b0b0000f90f0000 �� C 


		
%# , #&')*)-0-(0%()(�� C



(((((((((((((((((((((((((((((((((((((((((((((((((((��  ` `" ��              ��            ��    ���e�m�������]Ń���Y�>C��l>��ֵET�\��^�Q�a~2U���Z3�nrG.�[�jA��9���.IӴ,�����(��� xd��W�-!�,�/���U�R=%��f7��4�֜4W��� ��4�?=sƳ�|(6yz�ޠ��:�=TF�a��,+oɚXS�|��� (         !"#$123AB��  $���saa�����&+�����3��� BX��XɌ�)5�14d-+��M��x�5צGl�b�|r�;���Ka����O�)�x6D�\�/�TA���9l� #a�y��A��9M�Tڈ��K\��$Ε���~e����r�L��O��\sĊ��!�G��r
�M�)U���|͖�a#f&id�򏽞��y�Q��3V�Y��ieX�1�N
���Z�S�%P�	oR]�57�]h�z,�����xH���:uu��T��%*I�Б�fD�n1	��kH�4�A�I�c���*��'L1�4��We9���L�K��9I�K���-4HY���C��������[���g��>��yW�yO�� !          !1"3QA�� ?q�X�y/Х�2#1V���މ�=�ڃLR룶bW�D�]�s�ђ
rݘ�Ƌ�Yi"~J'��D"�����$O�L�7�z�u��^�3eP�����/栏�Нb�dO�k����ٜ|Q�l�� #          !"A1#2�� ?�@6c�w�}�S*Q��ba6j|�m:�T���Ɯw�Rd߸"�����/��O��F��e�LPቚیƫV�)k1�f�T��>�Җ0�y�y��:3��(��+S�� .        !"1AQaq2#BR��� 3����  ?�e����7Nl�4��� ��ӡ���]���>�m��Gr��r�|Mn�x�@�]-׉L�#Xú� �<PU(Ԩ㦫G���I�"br�T��3J:��O�����gB��J��ԇ�n��Oz�3<�e��J��K\m&�p��U����2��ɲ�ze��_����:-�6],���$讻�@�)
sY�pԢ:�1�vFN�ְ���eH�ckj���lw���0"��T�cN���gI��9$	��m�sF�}�[ ��*��n��q6�* ���E�����-��=�,�Bw+D��SvE���-!m*�[�|ESe"\�5\@�(���S`t�DF���8��M�Q̪�fF�A�������ʬ��Oů�:�(�I3�.�	�*[g�өb��Qxl8e�w+�C3%9Ԫel�'�oi�%��1�D��*���u�m�,��
��6��m<&���x_�� %       !1AQaq����������  ?!�u��|K<��,*!�ixj/o�L�	�LaS�`��t@�;��IoԨ�)��6ݠ-�(,�*�[5�?S$b宷�
k[�r��� ����m̺DC&(_E�Ps�ĥ�S8��=JWO����j�*���~Up-q��9�b�a3ת���,�ޫQ�TYp��Ezbs�+&J���&fEf�J|�[���~���+m�˙�qa]����+&_�kD6�03�x'f �q�b�5��$Tܼ~"k\�/�ٖ���Wٴ��\�s�Z8�1n��-ȴ�8��5���T6�S2`�P"+H��v	�o�|G�g1n% v� �"�3��0 �>pz [�/��X��Q+�^�`����C_�%� S6��w�� ��W�
�j&�<t&�^o�U�݌?=� �؅�=�����9W�Je�~���t9O���10X>����s�i^S�m�	�ʦ,��_�[��Z?> ��aQ�'��\5�@�E��*��'JX\6؃����E7KX�P�����P�kߏq�� ḍKD����^eH�Ө3G�x�Vڏi�7�W���Ͷ̴�F��UȄq4�W�F��\#�K��sjQ��5M.N����Vf�fk�ef㒇с�[d��L���'�G\t���������+���|�T�(\��L.XFZ�[��/���      � �Ԛ�ю�C�"�;�-���˺גe��� &          !A1�Qa��ၡ��q��� ?j����i��~��,"A�*���o�2�_�)n8ݣ�� ���iw�� W}9RQp�����>a'?�
:w| ��O\� ��ˍ���� on�~2��:Ѧ�<��V�\����7E�J���tuy��~�J`k��olZ�>� ���� % 	        !1AQa��������q��� ?��P�8>�@KR�%EHq�}PE�~`�;;�|βD�"����/'��o� �����F#���}���`+�����W7�U��5�H�v�UE��'��ٯ��p��o�q�ft�=��� $       !1AQaq����������  ?Qr�v&��i"0e����H�j����n�8�]Q`-7�84W��./��w��24@C?+��Z�o6�9@���5Ax������ش7o���*�>����`�>�|M.6t*�X��n?a�A3�]��G�`GE>�W�}a5��k�_P�)Q�'ٜ���h`'�&�H��Bm���^��`i��[��kH�oyW��qه������k�oE�Uil�0@h��Ƶ�)�T�a#� ��#\P��X���c�	~|�������?.�H6����!����W��S!����<�co(F�a� �:X$
?#2;R�A���y�dn*�������U-����k|`��<��<�J�e���|��@�*k A]��<\g9yyC�K\74REH���x��6��	j��GZ� #U�)�I5�bʹj�Y�6�dl�rU���7� 2�B{S�^�8�CDxߜ6����o�ȍ<qŽb%�ͨ\�h�TM���\���!tGM3�:��/P�_�ܱ)ز�~pH�Puځҟ؅eª�Z�%Jq�!�')O8��P�_� �8
�zºd/a%=�#�B��ʉ= `����P��x�L���x2�At����r�3p�������p�E�k���H��z؏ۆ�)L[��X�� k��a͌���nh���tz�,�8,��Q��s�N[jp
�:/�:�.�C� �$5��k�㏸ ����B!:���,�o���Et�k�#���9�(��Ò�;��iE
^>V�a��<^�Ϭa�mG��+?0⊜��ӄ��xu^�Y�����@���*͂I���, ��@�X\�L�ް��y�!����v�P�?�J@mHX r~`�V<�<�څ���X�C^f%�i"�G�w�n
|`� �ދ����%]ι��i��w��Xs�<"����0G�l,��!����Y}V:(]p���y��ͅ��O>�~q���P-"|3v�.�a7�v�R]!�wA������t�_�HOHF�[�3�����&7��y�S�� 
U���T$�Н�z1b��P|k�y��ן��N7���8Ӯ��N=���.���`�� �nJ��@E�Y�;����       INDX( 	                 (   @  �      & �  y o   �          
H    � j     �.     �@0FO� =�������ǂN���8�R�                      b d i s t . c p y t h o n - 3 9 . p y c p y c H    � t     �.     �@0FO���`������ǂN����8�R�       �               b d i s t _ d u m b . c p y t h o n - 3 9 . p y c     [N    � r     �.     �@0FO� �e������ǂN���8�R� P      )M               b d i s t _ m s i . c p y t h o n - 3 9 . p y c       M    � r     �.     �@0FO��͸�����ǂN& �D�8�R� 0      �/               b d i s t _ r p m . c p y t h o n - 3 9 . p y c       �K    � z     �.     �@0FO� =�������ǂN�Ғ�8�R� 0      P!               b d i s t _ w i n i n s t . c p y t h o n - 3 9 . p y c      UH    � j     �.     �@0FO� �4������ǂN�Ғ�8�R�                      b u i l d . c p y t h o n - 3 9 . p y c p y c I    � t     �.     �@0FO��͸�����ǂN�ǹ�8�R�        �               b u i l d _ c l i b . c p y t h o n - 3 9 . p y c     �M    � r   & �.     �@0FO� �e������ǂN���8�R� @      .?               b u i l d _ e x t . c p y t h o n - 3 9 . p y c       \L    � p     �.     �@0FO��͸�����ǂN��.�8�R� 0      �(               b u i l d _ p y . c p y t h o n - 3 9 . p y c �H    � z     �.     �@0FO� �e������ǂN��U�8�R�        �               b u i l d _ s c r i p t s . c p y t h o n - 3 9 . p y c      #I    � j     �.     �@0FO� �e������ǂN��|�8�R�                       c h e c k . c p y t h o n - 3 9 . p & c p y c iE    � j     �.     �@0FO� j*������ǂN����8�R�                      c l e a n . c p y t h o n - 3 9 . p y c p y c ML    � l     �.     �@0FO� \������ǂN��ʻ8�R� 0      �'               c o n f i g . c p y t h o n - 3 9 . p y c y c �M    � n     �.     �@0FO� �e������ǂN�j�8�R� @      �4               i n s t a l l . c p y t h o n - 3 9 . p y c c �E    � x     �.     �@0FO���`������ǂN�a�8�R�       �               i n s t a l l _ d a t a . c p y t h & n - 3 9 . p y c qG    � �     �.     �@0FO��y/������ǂN�j?�8�R�       �               i n s t a l l _ e g g _ i n f o . c p y t h o n - 3 9 . p y c �D    � ~     �.     �@0FO� Ȼ�����ǂN�4ۼ8�R�       �               i n s t a l l _ h e a d e r s . c p y t h o n - 3 9 . p y c   (I    � v     �.     �@0FO� \������ǂN�<��8�R�        �               i n s t a l l _ l i b . c p y t h o n - 3 9 . p y c   �E    � ~     �.     �@0FO� =�������ǂN�4ۼ8�R�       D    &          i n s t a l l _ s c r i p t s . c p y t h o n - 3 9 . p y c   zK    � p     �.     �@0FO��ӑ������ǂN�P�8�R� 0      �                r e g i s t e r . c p y t h o n - 3 9 . p y c �M    � j     �.     �@0FO���`������ǂN�P�8�R� @      8               s d i s t . c p y t h o n - 3 9 . p y c p y c DI    � l     �.     �@0FO� Ȼ�����ǂN�w�8�R�        \               u p l o a d . c p y t h o n - 3 9 . p y c y c �A    � p     �.     �@0FO� j*������ǂN��Ľ8�R&        �               _ _ i n i t _ _ . c p y t h o n - 3 9 . p y c                                                                                                                                                                                                                                                                                                                                                                                                                                                     &                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               & /****************************************************************************
**
** Copyright (C) 2017 The Qt Company Ltd.
** Contact: http://www.qt.io/licensing/
**
** This file is part of the Qt Quick Controls 2 module of the Qt Toolkit.
**
** $QT_BEGIN_LICENSE:LGPL3$
** Commercial License Usage
** Licensees holding valid commercial Qt licenses may use this file in
** accordance with the commercial license agreement provided with the
** Software or, alternatively, in accordance with the terms contained in
** a written agreement between you and The Qt Company. For licensing terms
** and conditions see http://www.qt.io/terms-conditions. For further
** information use the contact form at http://www.qt.io/contact-us.
**
** GNU Lesser General Public License Usage
** Alternatively, this file may be used under the terms of the GNU Lesser
** General Public License version 3 as published by the Free Software
** Foundation and appearing in the file LICENSE.LGPLv3 included in the
** packaging of this file. Please review the following information to
** ensure the GNU Lesser General Public License version 3 requirements
** will be met: https://www.gnu.org/licenses/lgpl.html.
**
** GNU General Public License Usage
** Alternatively, this file may be used under the terms of the GNU
** General Public License version 2.0 or later as published by the Free
** Software Foundation and appearing in the file LICENSE.GPL included in
** the packaging of this file. Please review the following information to
** ensure the GNU General Public License version 2.0 requirements will be
** met: http://www.gnu.org/licenses/gpl-2.0.html.
**
** $QT_END_LICENSE$
**
****************************************************************************/

import QtQuick 2.9
import QtQuick.Controls 2.2
import QtQuick.Controls.impl 2.2
import QtQuick.Templates 2.2 as T

T.ToolButton {
    id: control

    implicitWidth: Math.max(background ? background.implicitWidth : 0,
                            contentItem.implicitWidth + leftPadding + rightPadding)
    implicitHeight: Math.max(background ? background.implicitHeight : 0,
                             contentItem.implicitHeight + topPadding + bottomPadding)
    baselineOffset: contentItem.y + contentItem.baselineOffset

    padding: 6

    contentItem: Text {
        text: control.text
        font: control.font
        color: control.enabled ? (control.visualFocus ? Default.focusColor : Default.textDarkColor) : Default.textDisabledLightColor
        elide: Text.ElideRight
        horizontalAlignment: Text.AlignHCenter
        verticalAlignment: Text.AlignVCenter
    }

    background: Rectangle {
        implicitWidth: 40
        implicitHeight: 40

        color: Qt.darker(Default.toolButtonColor, control.enabled && (control.checked || control.highlighted) ? 1.5 : 1.0)
        opacity: control.down ? 1.0 : control.enabled && (control.checked || control.highlighted) ? 0.5 : 0
        visible: control.down || (control.enabled && (control.checked || control.highlighted))
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2021 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn\Util;

use Cose\Algorithm\Signature\ECDSA;
use Cose\Algorithm\Signature\Signature;

/**
 * This class fixes the signature of the ECDSA based algorithms.
 *
 * @internal
 *
 * @see https://www.w3.org/TR/webauthn/#signature-attestation-types
 */
abstract class CoseSignatureFixer
{
    public static function fix(string $signature, Signature $algorithm): string
    {
        switch ($algorithm::identifier()) {
            case EC