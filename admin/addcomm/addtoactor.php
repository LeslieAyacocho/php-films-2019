<?php
	require_once '../includes/connect.php';



	
	$ActorFullName = mysqli_real_escape_string($conn,trim($_GET['ActorFullName']));
	$ActorNotes =  mysqli_real_escape_string($conn,trim($_GET['ActorNotes']));

	

	$sql = "INSERT INTO actors (ActorFullName,ActorNotes) VALUES (?,?)";


	//s -string i- integer
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ss",$ActorFullName,$ActorNotes);

	// echo $sql;

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../actor.php");
	}

?>