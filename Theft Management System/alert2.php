<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_plan_id = "daba9c33d4d54cd4b63520e4dbef39ea";
    $bearer_token = "7f5d76663ff7412ba03236711d35ca64";
    $send_from = "+447520662063";
    $recipient_phone_numbers = $_POST['recipient_phone_numbers'];
    $message = $_POST['message'];

    // Check recipient_phone_numbers for multiple numbers and make it an array.
    if (stristr($recipient_phone_numbers, '+254745842774')) {
        $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
    } else {
        $recipient_phone_numbers = [$recipient_phone_numbers];
    }

    // Set necessary fields to be JSON encoded
    $content = [
        'to' => array_values($recipient_phone_numbers),
        'from' => $send_from,
        'body' => $message
    ];

    $data = json_encode($content);

    $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
    curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SMS Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Send SMS</h1>
    <form method="POST" action="">
        <label for="recipient_phone_numbers">Recipient Phone Numbers:</label>
        <input type="text" name="recipient_phone_numbers" id="recipient_phone_numbers" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Send SMS">
    </form>
</body>
</html>
