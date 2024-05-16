<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "alliance";
//connect to db
$con =mysqli_connect($host,$user,$pass,$db_name);
//check if the connection failed
if(!isset($con)){
    die("Connection to db failed");
}
?>