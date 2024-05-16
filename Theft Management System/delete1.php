<?php
//check if the delete link has been clicked
if(isset($_GET["id"])){
    $Id=$_GET["id"];
}
//connect to the database to delete
require_once "Registration_handler.php";
//prepare to delete
$deleteQuery="DELETE FROM `users` WHERE  id='$Id'";
//use mysqli_query()to implement the deletion
$delete=mysqli_query($con,$deleteQuery);
//check if deletion was successful
if(isset($delete)){
    //Redirect back to users.php to confirm the deletion action
    header("location:Registered Student.php");
}else{
    echo "Deletion failed!!!";
}
?>
