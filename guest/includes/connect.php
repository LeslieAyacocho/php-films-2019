<?php

$db_host = 'localhost';
$db_username = "guest_film";
$db_password = "";
$conn= mysqli_connect($db_host, $db_username,$db_password) or die ("COULD NOT CONNECT! \n");

$db_name = "db_film2";

mysqli_select_db($conn,$db_name) or die ("COULD NOT CONNECT TO DATABASE $db_name!\n". mysql_error());
