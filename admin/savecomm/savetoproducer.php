<?php 
require_once '../includes/connect.php';


        $ID = mysqli_real_escape_string($conn,trim($_GET['ID']));
        $ProducerName = mysqli_real_escape_string($conn,trim($_GET['ProducerName']));
        $ContactEmailAddress = mysqli_real_escape_string($conn,trim($_GET['ContactEmailAddress']));
        $Website = mysqli_real_escape_string($conn,trim($_GET['Website']));

        $sql = "UPDATE producers
        SET ProducerName = ? , ContactEmailAddress = ? , Website = ? WHERE ProducerID = ?";

$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sssi",$ProducerName,$ContactEmailAddress,$Website,$ID);

if (mysqli_execute($stmt))
{	mysqli_commit($conn);
    header("location: ../producer.php");
}
        
?>