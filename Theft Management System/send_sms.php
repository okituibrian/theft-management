<?php
require_once 'vendor/autoload.php'; // Replace with the actual path to the autoload.php file *

use Twilio\Rest\Client;

// Your Twilio account SID and auth token
$accountSid = 'AC80a684edd6e020b899230f5dac2874a5';//YOUR_ACCOUNT_SID 
$authToken = '250789a322c50d08cd74076bb1afd5f6';//YOUR_AUTH_TOKEN

// Create a Twilio client
$client = new Client($accountSid, $authToken);

// The phone number to send the SMS to
$toPhoneNumber = '+254786194681';

// The message content
// $message = 'Report.php';
$message = 'This is a test message from your PHP application!';

try {
    // Send the SMS
    $client->messages->create(
        $toPhoneNumber,
        [
            'from' => 'YOUR_TWILIO_PHONE_NUMBER',
            'body' => $message,
        ]
    );
    
    echo 'SMS sent successfully.';
} catch (Exception $e) {
    echo 'Error sending SMS: ' . $e->getMessage();
}
