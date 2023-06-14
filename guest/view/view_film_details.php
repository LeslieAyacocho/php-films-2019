<!DOCTYPE html>
<html lang="en">
<head>
<title>ACTORS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\..\includes\css\film.css">
<style>
</style>
</head>
<body>

<?php include('..\..\includes\navbar\guest-navbar-detail.html');
      include("..\includes\connect.php");  

      $ID=$_GET['FilmTitleID'];


      $data = array();
      $sql = "CALL getFilmTitlesSpec('$ID');";
      $sql .="CALL getFilmActors('$ID');"; 

      if (mysqli_multi_query($conn,$sql)){
        do{
          if ($result = mysqli_store_result($conn)){
              $data[] = mysqli_fetch_all($result,MYSQLI_ASSOC);
          }
        }while(mysqli_next_result($conn));
      }
      mysqli_close($conn);


      
    //   echo "<pre>";
    //   print_r($data);
    //   echo "</pre>";
?>

<div class="row">
    <div class="column side">
    </div>


  <!-- *******************************MIDDLE*********************************** -->
    <div class="column middle">
    
            <!-- Table Content -->
                <?php
                echo "\t<h1>".$data[0][0]['FilmTitle']."</h1>\n";
                echo "\t<p>Story: ".$data[0][0]['FilmStory']."</p>\n";
                echo "\t<p>Release Date: ".$data[0][0]['FilmReleaseDate']."</p>\n";
                echo "\t<p>Duration: ".$data[0][0]['FilmDuration']." Minutes</p>\n";
                echo "\t<p>Additional Info: ".$data[0][0]['FilmAdditionalInfo']."</p>\n";
                echo "\t<p>Certificate: ".$data[0][0]['Certificate']."</p>\n";
                echo "\t<p>Genre: ".$data[0][0]['Genre']."</p>\n";
                ?>
            
    </div>


    <div class="column middle">
    <table style="margin-left:5%">
        <thead>
            <tr>
            <th>Actor</th>
            <th>Character</th>
            <th>Description</th>
            <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table Content -->
            <?php
            foreach ($data[1] as $row){
            echo "<tr>\n";
                echo "\t<td>".$row['ActorFullName']."</td>\n";
                echo "\t<td>".$row['CharacterName']."</td>\n";
                echo "\t<td>".$row['CharacterDescription']."</td>\n";
                echo "\t<td>".$row['RoleType']."</td>\n";                                  
            echo "</tr>\n"; 
        }
        ?>
        </tbody>
    </table>

    </div>
   <!-- *******************************MIDDLE*********************************** -->
  
    <div class="column side">
    </div>

<!-- <div class="footer">
  <p>Footer AAAAAAAAAAAAAAAAAAAAAAAAAA</p>
</div> -->
</div>
  
</body>
</html>