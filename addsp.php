<?php 
	
	$studentid = $_GET['studentid'];
	$programid = $_GET['Name'];
	
	
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = "UPDATE students 
			SET program_id='$programid' 
			WHERE student_id=$studentid";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Student updated ";
	
	
	mysqli_close($cox);	
	
?>