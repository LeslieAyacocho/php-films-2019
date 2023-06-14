<?php
session_start();
if(isset($_SESSION['admin'])){
$db_host = "localhost";
$db_username =  $_SESSION['username'];
$db_password = $_SESSION['password'];
$conn= mysqli_connect($db_host, $db_username,$db_password) or die ("COULD NOT CONNECT! \n");

$db_name = "db_film2";

mysqli_select_db($conn,$db_name) or die ("COULD NOT CONNECT TO DATABASE $db_name!\n". mysql_error());
}   
else{
    header('Location: ..\login\login.php');
}
?>