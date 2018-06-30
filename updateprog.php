<!DOCTYPE html>
<html>
<head>
	<title>Search a Program to Update</title>
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
            
		Program Name: <input type="text" name="Name">		
	        Program ID: <input type="text" name="id">		
		<input type="submit" value="Search">
	</form> <br></div>

<table border="1">
<?php 

 if($_SERVER['REQUEST_METHOD'] == "POST"){
 if(!empty($_POST['Name']) OR !empty($_POST['id'])){
 if(isset($_POST['Name']) && isset($_POST['id'])){

$programName = $_POST['Name'];
        $programID = $_POST['id'];

	$cox = mysqli_connect("localhost", "root", "","mydb") 
		or die("There was a problem while connecting");	
	
	$query = "SELECT name, program_id FROM  programs";
	
	if($programName != ''){
		$query .= " WHERE name like '%$programName%' ";		
		
	} elseif($programID != ''){
			$query .= " WHERE program_id like '%$programID%' "	;
		}		
		
	
	$result = mysqli_query($cox, $query);?>
	<tr>
		<th> Program Name </th>
		<th> Program ID </th>
	        <th colspan="2"> Actions </th>
	</tr>
	
	
<?php 	
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>$row[0] </td>";
		echo "<td>$row[1] </td>";
		echo "<td><a href='upprog.php?program_id=$row[1]'>Update</a> </td>";
                echo "<td><a href='deleteprog.php?program_id=$row[1]'>Delete</a> </td>";
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