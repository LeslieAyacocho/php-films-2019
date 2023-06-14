<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$ProducerID = $_GET['ProducerID'];
	$FilmTitleID = $_GET['FilmTitleID'];

	$sql = "INSERT INTO filmtitlesproducers (ProducerID,FilmTitleID) VALUES ('$ProducerID', '$FilmTitleID')";

	$result = mysqli_query($conn,$sql);

	echo $sql;

	if ($result)
	{
		header("location: ../producerfilms.php");
	}

?>