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

?>

<div class="row">
    <div class="column side">
    </div>


  <!-- *******************************MIDDLE*********************************** -->
  <div class="column middle">
  <form action="..\view_actor.php"  method ="GET">          
        <?php
         $ID=$_GET['ActorID'];
         $result = mysqli_query($conn, "CALL getActorRoleFilm($ID)");
        ?>
<!--             Table Header               -->
    <div class="container">
        <table>
        <thead>
            <tr>
            <th>Characters</th>
            <th>Description</th>
            <th>Film</th>
            <th>Role</th>
            
            </tr>
        </thead>
        <tbody>
            <!-- Table Content -->
            <?php
            while ($row = mysqli_fetch_assoc($result)){ 
            echo "<tr>\n";
                echo "\t<td>".$row['CharacterName']."</td>\n";
                echo "\t<td>".$row['CharacterDescription']."</td>\n";
                echo "\t<td>".$row['FilmTitle']."</td>\n";
                echo "\t<td>".$row['RoleType']."</td>\n";                                  
            echo "</tr>\n"; } 
                echo "</table>\n";
                mysqli_free_result($result);
                mysqli_close( $conn );
        ?>
        </tbody>
        </table>

 </form> 
  </div>
   <!-- *******************************MIDDLE*********************************** -->
  
    <div class="column side">
    </div>

<!-- <div class="footer">
  <p>Footer</p>
</div> -->
  
</body>
</html>