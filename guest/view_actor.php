<!DOCTYPE html>
<html lang="en">
<head>
<title>ACTORS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\includes\css\filmdate.css">
<style>
</style>
</head>
<body>

<?php include('..\includes\navbar\guest-navbar-main.html');
      include("includes\connect.php");  
      $result = mysqli_query($conn,"SELECT * FROM viewActors");;

?>

<div class="row">
    <div class="column middle">
    <form action="#" method ="GET">
      
                  <p><input type="text" name="ActorName">    <button class="btn btn-dark" name="btnsearch" type="submit">SEARCH</button></p>
  </form>


<?php 
    if($_GET){
    $Name="";

    if(isset($_GET['ActorName'])){
      $Name = $_GET['ActorName'];
    }

    $result = mysqli_query($conn,"SELECT * FROM viewActors WHERE ActorFullName LIKE '%$Name%' OR ActorNotes LIKE '%$Name%';");
    $num_rows = mysqli_num_rows( $result );
?>
  </div>


  <!-- *******************************MIDDLE*********************************** -->
<?php include('actor_table.php');}
else{
  $result = mysqli_query($conn,"SELECT * FROM viewActors");
  $num_rows = mysqli_num_rows( $result );
  include('actor_table.php');
}


?>
   <!-- *******************************MIDDLE*********************************** -->
  
  

<!-- <div class="footer">
  <p>Footer</p>
</div> -->
  
</body>
</html>