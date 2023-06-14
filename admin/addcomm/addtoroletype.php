<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$RoleType = $_GET['RoleType'];


	$sql = "INSERT INTO roletypes (RoleType) VALUES (?)";

	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"s",$RoleType);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../roletype.php");
	}

?>