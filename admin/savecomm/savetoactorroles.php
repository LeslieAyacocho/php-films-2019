<?php 
require_once '../includes/connect.php';


    $ActorID=mysqli_real_escape_string($conn,trim($_GET['ActorID']));
    $FilmTitleID = mysqli_real_escape_string($conn,trim($_GET['FilmTitleID']));

        $ActorID = mysqli_real_escape_string($conn,trim($_GET['ActorID']));
        $CharacterName = mysqli_real_escape_string($conn,trim($_GET['CharacterName']));
        $CharacterDescription = mysqli_real_escape_string($conn,trim($_GET['CharacterDescription']));
        $FilmTitleID = mysqli_real_escape_string($conn,trim($_GET['FilmTitleID']));
        $RoleTypeID = mysqli_real_escape_string($conn,trim($_GET['RoleTypeID']));

        $sql = "UPDATE filmactorroles
        SET ActorID = ? ,FilmTitleID = ?, CharacterName = ? , CharacterDescription = ?, RoleTypeID = ? WHERE ActorID = ? AND FilmTitleID = ?";
        
        $stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"issiiii",$ActorID, $CharacterName, $CharacterDescription, $FilmTitleID,$RoleTypeID,$ActorID,$FilmTitleID);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../actorroles.php");
	}
    
?>