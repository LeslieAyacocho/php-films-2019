<?php

include ("../includes/connect.php");


$sql = "DELETE FROM producers WHERE ProducerID = ". $_GET['ProducerID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../producer.php");

}



?>