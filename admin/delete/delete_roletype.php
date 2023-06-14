<?php

include ("../includes/connect.php");


$sql = "DELETE FROM roletypes WHERE RoleTypeID = ". $_GET['RoleTypeID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../roletype.php");

}



?>