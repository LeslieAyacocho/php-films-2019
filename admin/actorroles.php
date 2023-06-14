<!DOCTYPE html>
<html lang="en">
<head>
<title>FILMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="includes\css\admin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>

<?php include('..\includes\navbar\admin-navbar-main.html');
      include("includes\connect.php");  
      $result = mysqli_query($conn,"SELECT * FROM viewActorRoles");;

?>

<div class="row">
    <div class="column middle">
    <form action="#" method ="GET">
      
    <p> <input type="text" name="ActorName">     <button name="btnsearch" type="submit">SEARCH</button></p>
    </form>


          <?php
          
          if($_GET){
          $Name="";

          if(isset($_GET['ActorName'])){
            $Search = $_GET['ActorName'];
          }

          $result = mysqli_query($conn,"SELECT * FROM viewActorRoles WHERE ActorFullName LIKE '%$Search%' OR CharacterName LIKE '%$Search%';");
          $num_rows = mysqli_num_rows( $result );
          ?>
      </div>


  <!-- *******************************MIDDLE*********************************** -->
 
            <?php include('tables/actorroles_table.php');
            } 
            else {
              $result = mysqli_query($conn,"SELECT * FROM viewActorRoles");
              $num_rows = mysqli_num_rows( $result );
              include('tables/actorroles_table.php');
            } 
            ?>
  
   <!-- *******************************MIDDLE*********************************** -->

</div>
  
</body>
</html>