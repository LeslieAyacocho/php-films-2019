<?php

include ("../includes/connect.php");

$sql = "DELETE FROM filmtitlesproducers WHERE (ProducerID = ". $_GET['ProducerID'] . " AND FilmTitleID =". $_GET['FilmTitleID'] . ")" ;
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../producerfilms.php");

}



?>