<!DOCTYPE html>
 <html>
   <body>
<div class="form">
 <h1> Add Programs </h1>

<form action="?php echo $_SERVER['PHP_SELF']?" method="POST">
		Program Name: <input type="text" name="Name">
		Program ID: <input type="text" name="id">
                Length: <input type="text" name="length">
               <input type="submit" value="Create">
</form><br>
	
<a href="updateprog.php">Update Programs</a><br><br>
</div>

<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			if(!empty($_POST['Name']) && !empty($_POST['id']) && !empty($_POST['length'])){
                        if(isset($_POST['Name']) && isset($_POST['id']) && isset($_POST['length'])){

	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem while connecting");
    
        $programName = $_POST['Name'];
 	$programID = $_POST['id'];
        $length = $_POST['length'];
        
	
	$insert = "INSERT INTO programs (length, name, program_id) 
						VALUES('$length','$programName','$programID')";
	
	$result = mysqli_query($cox, $insert)
				or die("There was a problem while executing the insert");
				
	echo "The program was inserted succesfully";
		
	mysqli_close($cox);

                       }
}  else {

				echo "You must enter all fields";				

			}	

		}	

	?>

 </body>

</html>
