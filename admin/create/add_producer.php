<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD PRODUCER</title>
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

  <form action = "../addcomm/addtoproducer.php">

<p>Name: <input type="text" name = "ProducerName" value=""></p>

<p>Email Address: <input type="textarea" name = "ContactEmailAddress" value=""></p>

<p>Website: <input type="text" name = "Website" value=""></p>

<input type="submit" class="btn btn-info" name="submit" value="Add">
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