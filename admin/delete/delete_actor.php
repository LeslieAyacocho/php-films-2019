<?php

include ("../includes/connect.php");


$sql = "DELETE FROM actors WHERE ActorID = ". $_GET['ActorID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../actor.php");

}



?>