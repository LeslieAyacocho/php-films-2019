<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$Certificate =  mysqli_real_escape_string($conn,trim($_GET['Certificate']));

	$sql = "INSERT INTO filmcertificates (Certificate) VALUES (?)";
	
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"s",$Certificate);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../certificate.php");
	}
?>