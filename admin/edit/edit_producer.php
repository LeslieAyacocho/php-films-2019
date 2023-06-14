<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT PRODUCER</title>
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
  <form action="../savecomm/savetoproducer.php"  method ="GET">
        
    
            <?php 
            $ID=$_GET['ProducerID'];
            $result = mysqli_query($conn, "SELECT * FROM producers WHERE ProducerID = $ID");
            $row = mysqli_fetch_assoc($result);
            ?>
       
            <label>Producer Name: <input type="text" name="ProducerName"  value="<?php echo $row['ProducerName']?>" style="width: 100%"> </label>
                   
        <br>
            <label>Email Address: <input type="text" name="ContactEmailAddress"  value="<?php echo $row['ContactEmailAddress']?>" style="width: 100%"> </label>
                   
        <br>                    
            <label>Website:<input type="text" name="Website"  value="<?php echo $row['Website']?>" style="width: 100%"> </label>
                    
    
            
        
       
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