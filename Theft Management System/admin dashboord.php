<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'adm';

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to send an email
function sendEmail($to, $subject, $message)
{
    // Set up your email configuration
    $headers = "From: omondijeff88@gmail.com" . "\r\n" .
        "Reply-To: your_email@example.com" . "\r\n" .
        "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Send the email
    return mail($to, $subject, $message, $headers);
}
// Function to insert the theft alert into the database
function insertAlert($location, $description)
{
    global $conn;

    $location = $conn->real_escape_string($location);
    $description = $conn->real_escape_string($description);

    $sql = "INSERT INTO user (location, description, timestamp, is_read)
            VALUES ('$location', '$description', NOW(), 0)";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to get the list of unread alerts
function getUnreadAlerts()
{
    global $conn;

    $sql = "SELECT * FROM user WHERE is_read = 0 ORDER BY timestamp DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $alerts = array();
        while ($row = $result->fetch_assoc()) {
            $alerts[] = $row;
        }
        return $alerts;
    } else {
        return array();
    }
}

// Handle form submission
if (isset($_POST['submit'])) {
    $location = $_POST['location'];
    $description = $_POST['description'];

    // Insert the alert into the database
    if (insertAlert($location, $description)) {
        // Send email notification to the admin
        $adminEmail = 'admin@example.com';
        $subject = 'Theft Alert';
        $message = "Location: $location<br>Description: $description";
        sendEmail($adminEmail, $subject, $message);

        echo 'Alert submitted successfully!';
    } else {
        echo 'Error submitting the alert.';
    }
}

// Get the list of unread alerts
$alerts = getUnreadAlerts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theft Management System - Admin Dashboard</title>
</head>
<body>
    <h1>Theft Management System - Admin Dashboard</h1>

    <h2>Unread Alerts</h2>
    <?php if (!empty($alerts)) : ?>
        <table>
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alerts as $alert) : ?>
                    <tr>
                        <td><?php echo $alert['location']; ?></td>
                        <td><?php echo $alert['description']; ?></td>
                        <td><?php echo $alert['timestamp']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No unread alerts.</p>
    <?php endif; ?>

    <h2>Report Theft</h2>
    <form method="POST" action="">
        <label for="location">Location:</label>
        <input type="text" name="location" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
