<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cm_system');
if (isset($_POST["add"])){
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];


    $query = "SELECT 'id', `email`, `password` FROM `user` WHERE email='$userEmail' and password='$userPassword'";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        // $_SESSION['email'] = $userEmail;
        header('location:Theft Reported.php');
    }else {
        header('location:admin.php');
    }
}
?>
