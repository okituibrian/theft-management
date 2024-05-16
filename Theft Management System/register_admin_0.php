<?php
// register_admin.php

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "database_name");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert admin information into the database
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashedPassword')";

if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
