<!DOCTYPE html>
<html>
<head>
	<title>Search a Student to Update</title>
<style>

body {background-color: #75c7e2;}

.form {border-style:solid;
        border-radius: 25px;
        border-color: black;
        background-color: #59d259;
        width: 500px;
        padding: 20px;
        position: absolute;
        top: 40%;
        left: 35%;
        text-align: center;}

</style>

</head>
<body>
<div class="form">
	<form action="?php echo $_SERVER['PHP_SELF']?" method="POST">
                Student ID: <input type="text" name="studentid">	
		First Name: <input type="text" name="firstName">		
		Last Name: <input type="text" name="lastName">	
                Program ID: <input type="text" name="id">		
		<input type="submit" value="Search">
	</form><br>
</div>
<table border="1">

<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST"){
                   if(!empty($_POST['studentid']) OR !empty($_POST['firstName']) OR !empty($_POST['lastName']) OR !empty($_POST['id'])){
	           if(isset($_POST['studentid']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['id'])){	

        $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
        $studentid = $_POST['studentid'];
        $programID = $_POST['id'];

	$cox = mysqli_connect("localhost", "root", "","mydb") 
		or die("There was a problem while connecting");	
	
	$query = "SELECT first_name, last_name, student_id, program_id FROM  students";
	
	if($firstName != ''){
		$query .= " WHERE first_name like '%$firstName%' ";		
		if($lastName != ''){
			$query .= " or last_name like '%$lastName%' ";	
		}	
	} elseif($lastName != ''){
			$query .= " WHERE last_name like '%$lastName%' "	;
		}		
	 elseif ($studentid != ''){
			$query .= " WHERE student_id like '%$studentid%' "	;
		}		
	elseif ($programID != ''){
			$query .= " WHERE program_id like '%$programID%' "	;
		}		
	
	
	
	
	
	$result = mysqli_query($cox, $query);?>
<br>

	<tr>
		<th> Student ID </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Program ID </th>
		<th colspan="2"> Actions </th>
	</tr>
	
	
<?php 	
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>$row[2] </td>";
		echo "<td>$row[0] </td>";
		echo "<td>$row[1] </td>";
		echo "<td>$row[3] </td>";
		echo "<td><a href='updatestud.php?student_id=$row[2]'>Update</a> </td>";
                echo "<td><a href='deletestudent.php?student_id=$row[2]'>Delete</a> </td>";
		echo "</tr>";
	}
	
	
	mysqli_close($cox); }	
 }else {

				echo "You must enter a field";				

			}	

			
 }
	

			

			?>
</table>
</body>
</html>
