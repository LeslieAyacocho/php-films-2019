<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";

	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$ActorID =  mysqli_real_escape_string($conn,trim($_GET['ActorID']));
    $CharacterName =  mysqli_real_escape_string($conn,trim($_GET['CharacterName']));
    $CharacterDescription = mysqli_real_escape_string($conn,trim( $_GET['CharacterDescription']));
    $FilmTitleID =  mysqli_real_escape_string($conn,trim($_GET['FilmTitleID']));
    $RoleTypeID = mysqli_real_escape_string($conn,trim( $_GET['RoleTypeID']));
    

	$sql = "INSERT INTO filmactorroles (ActorID,CharacterName,CharacterDescription,FilmTitleID,RoleTypeID) VALUES (?,?,?,?,?)";

	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"issii",$ActorID, $CharacterName, $CharacterDescription, $FilmTitleID,$RoleTypeID);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../actorroles.php");
	}


?>
