<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'alliance');
if (isset($_POST["btn_add"])){
    $userFullname = $_POST["name"];
    $userEmail = $_POST["email"];
    $userNumber = $_POST["number"];
    $userPassword = $_POST["password"];
    $userContact = $_POST["phone"];


    $query = "SELECT `id`, `name`, `email`, `number`, `password`, `phone` FROM `users` 
    WHERE email='$userEmail' and password='$userPassword'";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['email'] = $userEmail;
        header('location:Report.php');
    }else {
        header('location:Login.php');
    }
}
?>











<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edge_lm_system');
if (isset($_POST["btn_Add"])){
    $userFullname = $_POST["name"];
    $userEmail = $_POST["email"];
    $userNumber = $_POST["number"];
    $userPassword = $_POST["password"];
    $userContact = $_POST["phone"];

    $query = "SELECT `id`, `name`, `email`, `number`, `password`,
     `phone` FROM `theft` WHERE email='$userEmail' and password='$userPassword'";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['email'] = $userEmail;
        header('location:Report.php');
    } else {
        header('location:index.php');
    }
}
?>