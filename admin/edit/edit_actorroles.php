<!DOCTYPE html>
<html lang="en">
<head>
<title>EEDIT ACTOR ROLES</title>
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
      
        $ActorID=$_GET['ActorID'];
		$FilmTitleID = $_GET['FilmTitleID'];

		$data = array();
		$sql = "CALL getActorRolesSpec('$ActorID','$FilmTitleID');";
		$sql .="SELECT * FROM actors;"; 
		$sql .="SELECT * FROM filmtitles;"; 
		$sql .="SELECT * FROM roletypes;";

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
  
  <?php
        foreach ($data[0] as $row){

        
    ?>
	   <form action="../savecomm/savetoactorroles.php"  method ="GET">
       <div class="form-group col-md-5">
		<p> Actor:
				<select class="form-control" id="exampleFormControlSelect1" name = "ActorID" value="<?php echo $row['ActorID'];?>"> 
				<option selected value="<?php echo $data[0][0]['ActorID'] ?>"><?php echo $data[0][0]['ActorFullName'] ?></option>
                            <?php
                               foreach ($data[1] as $row){

                            ?>
                                    <option type="text" name = "ActorID" value="<?php echo $row['ActorID'];?>"><?php echo $row['ActorFullName'];?></option>
                    
                            <?php 
                                } 
                            ?>
                </select>
        </p>
        
        <p>Character Name: <input type="text" name = "CharacterName" value="<?php echo $data[0][0]['CharacterName'];?>"></p>       
        
        <p>Description:</p>
					<p>
							<textarea rows="4" cols="100" type="textarea" name = "CharacterDescription" value="">
							<?php echo $data[0][0]['CharacterDescription'];?>
							</textarea>
		</p>

		</div>
		<div class="form-group col-md-6">
		<p> Film:
		<select class="form-control" id="exampleFormControlSelect1" name = "FilmTitleID" value="<?php echo $row['FilmTitleID'];?>"> 
					<option selected value="<?php echo $data[0][0]['FilmTitleID'] ?>" ><?php echo $data[0][0]['FilmTitle'] ?></option>
					<?php
						 foreach ($data[2] as $row){
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
					<option selected value="<?php echo $data[0][0]['RoleTypeID'] ?>"><?php echo $data[0][0]['RoleType'] ?></option>
					<?php
						 foreach ($data[3] as $row){
					?>
							<option type="text" name = "RoleTypeID" value="<?php echo $row['RoleTypeID'];?>"><?php echo $row['RoleType'];?></option>
			
					<?php 
						} 
					?>
        </select>
		</p>
		</div>
        <div class="form-group">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>" />
            <button type="submit" class="btn btn-info" name="save">Save Changes</button>
            
        </div> 



	</form>
	<?php }?>
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