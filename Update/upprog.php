<!DOCTYPE html>
 <html>
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
