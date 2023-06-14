<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD FILM</title>
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

?>

<div class="row">
    <div class="column side">
    </div>


  <!-- *******************************MIDDLE*********************************** -->
  <div class="column middle">
  <form action = "../addcomm/addtofilm.php">

					<p>Film Title: <input type="text" name = "FilmTitle" value=""></p>

					<p>Film Story:</p>
					<p>
							<textarea rows="4" cols="100" type="textarea" name = "FilmStory" value="">
							</textarea>

					</p>


					<p>Release Date: <input type="date" name = "FilmReleaseDate" value="<?php echo $row['FilmReleaseDate']?>">
					</p>
						<!-- <input type="date" name = "FilmReleaseDate" value=""></p> -->

						<p>Duration: <input type="text" name="FilmDuration"  value="" style="width: 10%"> minutes </p>

					<p>Additional Information:</p>
					<p>
							<textarea rows="4" cols="100" type="text" name = "FilmAdditionalInfo" value="">
							</textarea>

					</p>


					<div class="form-group col-md-2">
					<label for="inputState">Certificate:</label>
						<select id="inputState" class="form-control" name = "CertificateID" value="<?php echo $row['CertificateID'];?>">
									<option selected> </option>
							<?php
								$result = mysqli_query($conn,"SELECT * FROM filmcertificates");
								while($row = mysqli_fetch_assoc($result)){
							?>
							<option type="text" name = "CertificateID" value="<?php echo $row['CertificateID'];?>"><?php echo $row['Certificate'];?></option>
							<?php 
								} 
							?>
						</select>
					</div>


					<div class="form-group col-md-2">
					<label for="inputState">Genre:</label>
						<select id="inputState" class="form-control" name = "GenreID" value="<?php echo $row['GenreID'];?>">
									<option selected> </option>
							<?php
								$result = mysqli_query($conn,"SELECT * FROM filmgenres");
					
								while($row = mysqli_fetch_assoc($result)){
							?>
									<option type="text" name = "GenreID" value="<?php echo $row['GenreID'];?>"><?php echo $row['Genre'];?></option>

							<?php 
								} 
							?>
						</select>
					</div>

					<input type="submit" class="btn btn-info" name="submit" value="Add Film">
					</form>

<?php
    mysqli_close($conn)
?>

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