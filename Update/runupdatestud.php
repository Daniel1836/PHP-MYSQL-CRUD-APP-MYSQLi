<?php 
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$studentid = $_POST['studentid'];
	$programId = $_POST['id'];
	
	
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = "UPDATE students 
			SET  first_name = '$firstname', 
			last_name='$lastname',
			student_id='$studentid',
                        program_id='$programId' 
			WHERE student_id=$studentid";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem updating");
	
	echo "Student updated<br>";
	echo "<a href='updatestudents.php'>Student Search</a>";
	
	mysqli_close($cox);	
	
?>
