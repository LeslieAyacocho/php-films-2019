<?php

include ("../includes/connect.php");


$sql = "DELETE FROM filmgenres WHERE GenreID = ". $_GET['GenreID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../genre.php");

}



?>