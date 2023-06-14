<?php 
require_once '../includes/connect.php';


        $ID = mysqli_real_escape_string($conn,trim($_GET['ID']));
        $ActorFullName = mysqli_real_escape_string($conn,trim($_GET['ActorFullName']));
        $ActorNotes = mysqli_real_escape_string($conn,trim($_GET['ActorNotes']));
       

        $sql = "UPDATE actors
        SET ActorFullName = ?, ActorNotes = ?
        WHERE ActorID = ?";
        
$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ssi",$ActorFullName,$ActorNotes,$ID);

	// echo $sql;

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn);
		header("location: ../actor.php");
	}
    
?>