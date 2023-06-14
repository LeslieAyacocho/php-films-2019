<!DOCTYPE html>
<html lang="en">
<head>
<title>FILMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="..\includes\css\filmdate.css">
<style>
</style>
</head>
<body>

<?php include('..\includes\navbar\guest-navbar-main.html');
      include("includes\connect.php");  
      $result = mysqli_query($conn,"SELECT * FROM viewfilms");

?>
 
 <div class="row">
    <div class="column middle">
    <form action="#" method ="GET">
          
        <p><input type="text" name="search">  <button class="btn btn-dark" name="btnsearch" type="submit">SEARCH</button></p>
  </form>


          <?php
          
          if($_GET){
          $Name="";

          if(isset($_GET['search'])){
            $Search = $_GET['search'];
          }

          $result = mysqli_query($conn,"SELECT * FROM viewFilms WHERE FilmTitle LIKE '%$Search%'");
          $num_rows = mysqli_num_rows( $result );
          ?>
    </div>
  <!-- *******************************MIDDLE*********************************** -->

        <?php 
           include('film_table.php');
        } 
          else{
            $result = mysqli_query($conn,"SELECT * FROM viewFilms");
            $num_rows = mysqli_num_rows( $result );
            include('film_table.php');
          } 
        ?>
   <!-- *******************************MIDDLE*********************************** -->
<div>
</body>
</html>