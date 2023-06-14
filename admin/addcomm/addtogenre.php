<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$Genre = mysqli_real_escape_string($conn,trim($_GET['Genre']));


	$sql = "INSERT INTO filmgenres (Genre) VALUES ('$Genre')";

	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"s",$Genre);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../genre.php");
	}
?>