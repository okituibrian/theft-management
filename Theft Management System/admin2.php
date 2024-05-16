<?php
// login_admin.php

session_start();

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "database_name");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve hashed password from the database based on username
$sql = "SELECT password FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $hashedPassword = $row['password'];

  // Verify the entered password against the hashed password
  if (password_verify($password, $hashedPassword)) {
    $_SESSION['admin_username'] = $username;
    header("Location: Theft Reported.php");
  } else {
    echo "Invalid password.";
  }
} else {
  echo "Invalid username.";
}

mysqli_close($conn);
?>
