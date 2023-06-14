<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT ACTOR</title>
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
  <form action="../savecomm/savetoactor.php"  method ="GET">
        
    
        <?php 
        $ID=$_GET['ActorID'];
        $result = mysqli_query($conn, "SELECT * FROM actors WHERE ActorID = $ID");
        $row = mysqli_fetch_assoc($result);
        ?>
   
        <label> Actor Name:</label>
                <input type="text" name="ActorFullName"  value="<?php echo $row['ActorFullName']?>" style="width: 35%">

        <div class="form-group">
            <label for="ActorNotes">Description:</label>
            <textarea class="form-control"  rows="3" cols="100"  name="ActorNotes"><?php echo $row['ActorNotes']?> </textarea>
         </div>
    
   
    <div class="form-group">
        <input type="hidden" name="ID" value="<?php echo $ID; ?>" />
        <button type="submit" class="btn btn-info" name="save">Save Changes</button>
    </div> 
 
 
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