<!DOCTYPE html>
<html>

<head>

<body>
<?php 	

	$programID = $_GET['program_id'];

	

	

	$cox = mysqli_connect("localhost", "root", "", "mydb") 

			or die("There was a problem connecting");	

	

	$sql = " DELETE FROM programs WHERE program_id=$programID";

			

	$result = mysqli_query($cox, $sql) or die("There was a problem deleting");

	

	echo "Program deleted <br>";

	echo "<a href='updateprog.php'>Program Search</a>";

	

	mysqli_close($cox);	

	

?>
</body>

</html>

