<?php
// Check if the button has been clicked
if (isset($_POST["btn_Add"])) {
    // Start receiving the data from the user
    $userName = $_POST["name"];
    $userRegistrationNumber = $_POST["reg"];
    $userPhoneNumber = $_POST["phone"];
    $userEmail = $_POST["email"];
    $userGender = $_POST["gender"];
    $userDate = $_POST["date"];
    $userCategory = $_POST["cate"];
    $userMissing = $_POST["missing"];
      
    // Proceed to connect to the DB to save the data
    require_once "connect.php";
      
    // Prepare the insert query to save
    $insertQuery = "INSERT INTO `users` (`id`, `name`, `reg`, `phone`, `email`, `gender`, `date`,
     `cate`, `missing`) VALUES (null, '$userName', '$userRegistrationNumber', '$userPhoneNumber',
      '$userEmail', '$userGender', '$userDate', '$userCategory', '$userMissing')";
                     
    // Use mysqli_query() to save
    $saves = mysqli_query($con, $insertQuery);
      
    // Check if the saving was successful
    if ($saves) {
        echo "<script>alert('Successfully submitted the Lost items! Wait for a call from Admin')</script>";
        header('location: index.php');
        exit;
    } else {
        echo "<script>alert('Submission failed')</script>";
    }
}
?>
