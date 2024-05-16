
<?php
    session_start();
    header('location:Login1.php');
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'cm_system');

    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];

    $query ="INSERT INTO `user`(`id`, `email`, `password`) VALUES (null,'$userEmail','$userPassword')";

    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "Username Already Taken";
    } else {
        $reg = " INSERT INTO `user`(`id`,`email`, `password`) VALUES (null,'$userEmail','$userPassword')";
        mysqli_query($con, $reg);
        echo "Registration Successful";     
}
?>
