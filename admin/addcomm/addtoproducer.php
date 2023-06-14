<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$ProducerName = mysqli_real_escape_string($conn,trim($_GET['ProducerName']));
	$ContactEmailAddress = mysqli_real_escape_string($conn,trim($_GET['ContactEmailAddress']));
	$Website = mysqli_real_escape_string($conn,trim($_GET['Website']));

	$sql = "INSERT INTO producers (ProducerName,ContactEmailAddress,Website) VALUES (?,?,?)";

	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"sss",$ProducerName,$ContactEmailAddress,$Website);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../producer.php");
	}

?>