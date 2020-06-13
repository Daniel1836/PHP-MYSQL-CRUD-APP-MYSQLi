<!DOCTYPE html>
<html>
<head>

<title>
Update a Program
</title>

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

<?php 
	$programID = $_GET['program_id'];
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = "SELECT name, program_id FROM programs WHERE program_id=$programID";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem searching");
	if($row = mysqli_fetch_array($result)){
		$programname = $row[0];				
                $programID = $row[1];
	}
	
	mysqli_close($cox);	
	
?>
<div class="form">
<form action="runupdateprog.php" method="post">
	Program Name <input type="text" name="name" value="<?php echo $programname?>"><br>
	Program ID <input type="number" name="id" value="<?php echo $programID?>"><br>
	<input type="submit" value="Update">
</form></div>



</body>

</html>
