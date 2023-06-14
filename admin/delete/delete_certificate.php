<?php

include ("../includes/connect.php");


$sql = "DELETE FROM filmcertificates WHERE CertificateID = ". $_GET['CertificateID'];
echo $sql;
$result = mysqli_query( $conn,$sql);
if ($result) {

 header("location: ../certificate.php");

}

?>