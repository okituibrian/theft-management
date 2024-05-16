<?php
    session_start();
    header('location:Login.php');
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'alliance');

    $userFullname = $_POST["name"];
    $userEmail = $_POST["email"];
    $userNumber = $_POST["number"];
    $userPassword = $_POST["password"];
    $userContact = $_POST["phone"];

    $query ="INSERT INTO `users`(`id`, `name`, `email`, `number`, 
    `password`, `phone`) VALUES (null,'$userFullname','$userEmail','$userNumber','$userPassword','$userContact')";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "Username Already Taken";
    } else {
        $reg = " INSERT INTO `users`(`id`, `name`, `email`,'number', `password`, `phone`) VALUES (null,'$userFullname',
        '$userEmail','$userPassword','$userContact')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
        
}
?>
































