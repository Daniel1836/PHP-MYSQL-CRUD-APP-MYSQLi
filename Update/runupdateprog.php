<?php 
	$programname = $_POST['name'];
	$programID = $_POST['id'];
	
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = "UPDATE programs 
			SET name = '$programname', 
                        program_id='$programID' 
			WHERE program_id=$programID";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Program updated<br>";
	echo "<a href='updateprog.php'>Program Search</a>";
	
	mysqli_close($cox);	
	
?>
