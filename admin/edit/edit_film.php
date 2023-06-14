<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT FILM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\includes\css\admin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>

<?php include('..\..\includes\navbar\admin-navbar-create.html');
      include("..\includes\connect.php"); 

      $ID=$_GET['FilmTitleID'];
      $data = array();
      $sql = "CALL getFilmTitlesSpec($ID);";
      $sql .="SELECT * FROM filmgenres;"; 
      $sql .="SELECT * FROM filmcertificates;"; 

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

<div class="row">
    <div class="column side">
    </div>


  <!-- *******************************MIDDLE*********************************** -->
  <div class="column middle">
  <form action="../savecomm/savetofilm.php"  method ="GET">
    

    <?php
         foreach ($data[0] as $row){

        
    ?>

        <label>Film Title:</label>
                <input type="text" name="FilmTitle"  value="<?php echo $row['FilmTitle']?>" style="width: 35%">

        <div class="form-group">
            <label for="FilmStory">Synopsis:</label>
            <textarea class="form-control"  rows="3" cols="100"  name="FilmStory"><?php echo $row['FilmStory']?> </textarea>
        </div>
    
        <label>Release Date: </label>
                <input type="date" name = "FilmReleaseDate" value="<?php echo $row['FilmReleaseDate']?>">

        <p>Duration: <input type="text" name="FilmDuration"  value="<?php echo $row['FilmDuration']?>" style="width: 10%"> minutes </p>
                
        <div class="form-group">
            <label for="FilmStory">Additional Info:</label>
            <textarea class="form-control" rows="3" cols="100"  name="FilmAdditionalInfo"><?php echo $row['FilmAdditionalInfo']?> </textarea>
            </div>

        <div class="form-group">
        <label for="GenreID">Genre:</label>
                <select name="GenreID" value="<?php echo $row['GenreID']?>">
                <option selected value="<?php echo $data[0][0]['GenreID']; ?>"><?php echo $data[0][0]['Genre']; ?></option>
                <?php
                foreach ($data[1] as $row) {
                ?>
                <option value="<?php echo $row['GenreID'] ?>"><?php echo $row['Genre'] ?></option>
                <?php } ?>
                </select>
        </div>
                    
        <div class="form-group">
        <label for="CertificateID">Certificate:</label>
                <select   name="CertificateID" value="<?php echo $row['CertificateID']?>">
                <option selected value="<?php echo $data[0][0]['CertificateID']; ?>> <?php echo $data[0][0]['Certificate']; ?></option>
                <?php
                foreach ($data[2] as $row) {
                ?>
                <option value="<?php echo $row['CertificateID'] ?>"><?php echo $row['Certificate'] ?></option>
                <?php } ?>
                </select>
        </div>
    
    <div class="form-group">
        <input type="hidden" name="ID" value="<?php echo $ID; ?>" />
        <button type="submit" class="btn btn-info" name="save">Save Changes</button>
        
    </div> 
                <?php }?>
    
    
</form>
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