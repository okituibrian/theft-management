<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the Composer autoloader
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $reg = $_POST['reg'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $category = $_POST['cate'];
    $missing = $_POST['missing'];

    // Prepare the message content
    $message = "Name: $name\n";
    $message .= "Registration Number: $reg\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Gender: $gender\n";
    $message .= "Date Lost: $date\n";
    $message .= "Category: $category\n";
    $message .= "Missing: $missing\n";

    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Set up SMTP
        $mail->isSMTP();
        $mail->Host = 'phpmailer@synchromedia.co.uk'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'omondijeff88@gmail.com'; // Replace with your SMTP username
        $mail->Password = '37Jeff#20037Jeff#200'; // Replace with your SMTP password
        $mail->Port = 587; // Replace with your SMTP port
        $mail->SMTPSecure = 'tls';

        // Set up sender and recipient
        $mail->setFrom('info@puea.ac.ke', 'Omondi Jeff'); // Replace with sender's email and name
        $mail->addAddress('omondijeff88@gmail.com', 'Omondi jeff'); // Replace with recipient's email and name

        // Set email subject and body
        $mail->Subject = 'Lost Item Submission';
        $mail->Body = $message;

        // Send the email
        $mail->send();
        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo 'Error sending email: ' . $mail->ErrorInfo;
    }
}
?>
