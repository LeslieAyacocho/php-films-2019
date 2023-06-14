<!DOCTYPE html>
<html lang="en">
<head>
<title>FILMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="includes\css\admin-2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>

<?php include('..\includes\navbar\admin-navbar-main.html');
      include("includes\connect.php");  
      $result = mysqli_query($conn,"SELECT * FROM filmgenres;");;

?>

<div class="row">
    <div class="column side">
    </div>


  <!-- *******************************MIDDLE*********************************** -->
  <div class="column middle">
<table>
        <thead>
            <tr>
            <!-- Table Header -->
            <th>Genres</th>
            </tr>
        </thead>
        <tbody>     
        <!-- Table Content -->
            <?php
                while ($row = mysqli_fetch_array($result)) { 
        
                    echo "\t<td>".$row['Genre']."<a href='delete/delete_genre.php?GenreID=" . $row['GenreID']." ' class=\"top-menu pull-right\"> <span class=\"fa fa-trash\" style=\"color: #f95959\"></span></a></td>\n</td>\n";
            
            echo "</tr>\n"; } 
            echo "</table>\n";
                    mysqli_free_result($result);
                    mysqli_close( $conn );
            ?>
        </tbody>
</table>
  </div>
   <!-- *******************************MIDDLE*********************************** -->
  
    <div class="column side">
    </div>

<!-- <div class="footer">
  <p>Footer</p>
</div> -->
                </div>
  
</body>
</html>