<?php
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['pass'];
$user = $_POST['username'];
$pass = $_POST['pass'];

$conn= mysqli_connect('localhost', $user,$pass, 'mysql') or die (header('Location: ..\login\failed_login.php'));

if($conn){
    $_SESSION['admin'] = True;
    header('Location: ..\admin\film.php');
}
?>