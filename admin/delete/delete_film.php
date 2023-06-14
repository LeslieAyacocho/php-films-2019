<?php

include ("../includes/connect.php");


$sql = "DELETE FROM filmtitles WHERE FilmTitleID = ". $_GET['FilmTitleID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../film.php");

}



?>