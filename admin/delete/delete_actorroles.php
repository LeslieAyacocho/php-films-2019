<?php

include ("../includes/connect.php");


$sql = "DELETE FROM filmactorroles WHERE ActorID = ". $_GET['ActorID'] . " AND FilmTitleID =". $_GET['FilmTitleID'];
echo $sql;
// echo $_GET['ActorID']."\n";
// echo $_GET['FilmTitleID'];
$result = mysqli_query( $conn,$sql);
if ($result) {
 header("location: ../actorroles.php");
}


?>