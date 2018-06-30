<!DOCTYPE html>
<html>

<head>

<body>
<?php 	
	$studentid = $_GET['student_id'];
	
	
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = " DELETE FROM students WHERE student_id=$studentid";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem deleting");
	
	echo "Student deleted <br>";
	echo "<a href='updatestudents.html'>Student Search</a>";
	
	mysqli_close($cox);	
	
?>
</body>

</html>

