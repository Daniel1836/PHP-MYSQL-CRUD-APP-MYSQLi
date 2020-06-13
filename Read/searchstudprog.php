<!DOCTYPE html>
<html>
<head>
<title>Search Students by Program
</title>

<style>

body {background-color: #75c7e2;}

</style>

</head>
<body>

<?php



	$cox = mysqli_connect("localhost", "root", "", "mydb") 

			or die("There was a problem connecting");

	

	$program = $_GET['Name'];

	

	$sql = "SELECT students.student_id, students.first_name, students.last_name, programs.name FROM students INNER JOIN programs ON students.program_id = programs.program_id WHERE programs.program_id=$program";

			

	$result = mysqli_query($cox, $sql) or die("There was a problem searching");?>

	

	<table border="2">

	<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Program</th></tr>

<?php

	while($row = mysqli_fetch_array($result)){

		echo "<tr>";

		echo "<td>$row[0]</td>";		

		echo "<td>$row[1]</td>";

		echo "<td>$row[2]</td>";

		echo "<td>$row[3]</td>";

		echo "</tr>";

		

	}



?>

</table>
</body>
</html>
