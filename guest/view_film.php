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
 <div class="column middle">
        <form action=""  method ="GET">
            <p>Start Date: <input id="startDate" width="276" name="datestart"/></p>
            <br>
            End Date: <input id="endDate" width="276" name="dateend"/> <br>
            <input type="submit"  class="btn btn-info" name="submit" value="Search Date">
        </form>
        <script>
        <?php include('includes\js\datepicker.js');?>
    </script>

<?php
if($_GET){
    $datestart = $_GET['datestart'];
    $dateend =$_GET['dateend'];

$date = str_replace('/', '-', $datestart );
$datestart1 = date("Y-d-m", strtotime($date));
$date1 = str_replace('/', '-', $dateend );
$dateend1 = date("Y-d-m", strtotime($date1));


    $data = array();
    $sql = "CALL getFilmTitlesDate('$datestart1','$dateend1')";

    if (mysqli_multi_query($conn,$sql)){
        do{
        if ($result = mysqli_store_result($conn)){
            $data[] = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        }while(mysqli_next_result($conn));
    }
    mysqli_close($conn);


    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
?>

</div>



  <!-- *******************************MIDDLE*********************************** -->
  <div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Film Titles</th>
            <th>Release Date</th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
        <?php
            foreach ($data[0] as $row) {
            echo "<tr>\n";
                   echo "<tr>\n";echo "\t<td><a class= 'link' href='view/view_film_details.php?FilmTitleID=".$row['FilmTitleID']."'>".$row['FilmTitle']."</a></td>\n";
                    echo "\t<td>".$row['FilmReleaseDate']."</td>\n";                   
            echo "</tr>\n"; 
            } 
        ?>
        </tbody>
</table>
<?php } 
else{ ?>

<div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Film Titles</th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
        <?php
        while ($row = mysqli_fetch_array($result)) { 
        echo "<tr>\n";echo "\t<td><a class= 'link' href='view/view_film_details.php?FilmTitleID=".$row['FilmTitleID']."'>".$row['FilmTitle']."</a></td>\n";
        echo "</tr>\n"; } 
        echo "</table>\n";
            mysqli_free_result($result);
            mysqli_close( $conn );
        ?>
        </tbody>
</table>
<?php } ?>   
  </div>
   <!-- *******************************MIDDLE*********************************** -->
<div>
</body>
</html>