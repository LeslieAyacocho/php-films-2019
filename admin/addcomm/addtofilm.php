<?php
	$conn = mysqli_connect("localhost","root","") or die ("could not connect");
	$db_name = "db_film2";


	mysqli_select_db($conn, $db_name) or die ("could not select the database");

	$FilmTitle = mysqli_real_escape_string($conn,trim($_GET['FilmTitle']));
	$FilmStory =mysqli_real_escape_string($conn,trim( $_GET['FilmStory']));
	$ReleaseDate = mysqli_real_escape_string($conn,trim($_GET['FilmReleaseDate']));
	$Duration = mysqli_real_escape_string($conn,trim($_GET['FilmDuration']));
	$AddInfo =mysqli_real_escape_string($conn,trim( $_GET['FilmAdditionalInfo']));
	$Certificate = mysqli_real_escape_string($conn,trim($_GET['CertificateID']));
	$Genre = mysqli_real_escape_string($conn,trim($_GET['GenreID']));


	$sql = "INSERT INTO filmtitles (FilmTitle,FilmStory,FilmReleaseDate,FilmDuration,FilmAdditionalInfo,CertificateID,GenreID) VALUES (?,?,?,?,?,?,?)";
	// echo $sql;
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"sssisii",$FilmTitle,$FilmStory,$ReleaseDate,$Duration,$AddInfo,$Certificate,$GenreID);

	if (mysqli_execute($stmt))
	{	mysqli_commit($conn) ;
		
		header("location: ../film.php");
	}

?>