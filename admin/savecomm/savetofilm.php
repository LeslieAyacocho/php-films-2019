<?php 
require_once '../includes/connect.php';


        $ID = (int) mysqli_real_escape_string($conn,trim($_GET['ID']));
        $FilmTitle = mysqli_real_escape_string($conn,trim($_GET['FilmTitle']));
        $FilmStory = mysqli_real_escape_string($conn,trim($_GET['FilmStory']));
        $FilmReleaseDate = mysqli_real_escape_string($conn, trim($_GET['FilmReleaseDate']));
        $FilmDuration = (int) mysqli_real_escape_string($conn,trim($_GET['FilmDuration']));
        $FilmAdditionalInfo = mysqli_real_escape_string($conn,trim($_GET['FilmAdditionalInfo']));
        $GenreID = (int) mysqli_real_escape_string($conn,trim($_GET['GenreID']));
        $CertificateID = (int) mysqli_real_escape_string($conn,trim($_GET['CertificateID']));

        $sql = "UPDATE filmtitles
        SET FilmTitle = ?, FilmStory = ?, FilmReleaseDate = ?, 
        FilmDuration = ? , FilmAdditionalInfo = ?, GenreID = ?, 
        CertificateID = ?
        WHERE FilmTitleID = ?";


$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sssisiii",$FilmTitle,$FilmStory,$FilmReleaseDate,$FilmDuration,$FilmAdditionalInfo,$GenreID,$CertificateID,$ID);


echo $sql;
if (mysqli_execute($stmt))
{	mysqli_commit($conn) ;
    
    header("location: ../film.php");
}
       
?>