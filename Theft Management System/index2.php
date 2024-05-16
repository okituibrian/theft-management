<!-- index.php -->
<html>
<body>
    <form action="" method="post">
        <!-- Your form fields here -->
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Process the form data here
        
        // Execute the Python script
        $output = shell_exec('python send_alert.py');
        echo $output;
    }
    ?>
</body>
</html>
