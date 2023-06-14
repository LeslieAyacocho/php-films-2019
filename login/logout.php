<?php
session_start();
session_destroy(); 
header('Location: ..\guest\view_film.php');
?>