<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD ACTOR ROLES</title>
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
      <form action = "../addcomm/addtoactorroles.php">

<div class="form-group col-md-5">
<p> Actor:
        <select class="form-control" id="exampleFormControlSelect1" name = "ActorID" value="<?php echo $row['ActorID'];?>"> 
        <option selected> </option>
                    <?php
                        $result = mysqli_query($conn,"SELECT * FROM actors");

                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <option type="text" name = "ActorID" value="<?php echo $row['ActorID'];?>"><?php echo $row['ActorFullName'];?></option>
            
                    <?php 
                        } 
                    ?>
        </select>
</p>

<p>Character Name: <input type="text" name = "CharacterName" value=""></p>       

<p>Description:</p>
            <p>
                    <textarea rows="4" cols="100" type="textarea" name = "CharacterDescription" value="">
                    </textarea>
</p>

</div>
<div class="form-group col-md-6">
<p> Film:
<select class="form-control" id="exampleFormControlSelect1" name = "FilmTitleID" value="<?php echo $row['FilmTitleID'];?>"> 
            <option selected> </option>
            <?php
                $result = mysqli_query($conn,"SELECT * FROM filmtitles");

                while($row = mysqli_fetch_assoc($result)){
            ?>
                    <option type="text" name = "FilmTitleID" value="<?php echo $row['FilmTitleID'];?>"><?php echo $row['FilmTitle'];?></option>
    
            <?php 
                } 
            ?>
</select>
</p>
</div>
                
<div class="form-group col-md-4">
<p> Role Type:
<select class="form-control" id="exampleFormControlSelect1" name = "RoleTypeID" value="<?php echo $row['RoleTypeID'];?>"> 
            <option selected> </option>
            <?php
                $result = mysqli_query($conn,"SELECT * FROM roletypes");

                while($row = mysqli_fetch_assoc($result)){
            ?>
                    <option type="text" name = "RoleTypeID" value="<?php echo $row['RoleTypeID'];?>"><?php echo $row['RoleType'];?></option>
    
            <?php 
                } 
            ?>
</select>
</p>
</div>




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