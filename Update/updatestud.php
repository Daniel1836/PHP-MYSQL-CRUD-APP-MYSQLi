<!DOCTYPE html>
 <html>
  <body>
<div class="form">
<?php 
	$studentid = $_GET['student_id'];
	$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem connecting");	
	
	$sql = "SELECT first_name, last_name, student_id, program_id FROM students WHERE student_id=$studentid";
			
	$result = mysqli_query($cox, $sql) or die("There was a problem searching");
	if($row = mysqli_fetch_array($result)){
		$firstname = $row[0];				
		$lastname = $row[1];				
		$studentid = $row[2];
                $programid = $row[3];
	}
	
	mysqli_close($cox);	
	
?>
<form action="runupdatestud.php" method="post">
	Student ID <input type="text" name="studentid" value="<?php echo $studentid?>"><br>
	First Name<input type="text" name="firstName" value="<?php echo $firstname?>"><br>
	Last Name<input type="text" name="lastName" value="<?php echo $lastname?>"><br>
	Program ID <input type="number" name="id" value="<?php echo $programid?>"><br>
	<input type="submit" value="Update">
</form>
</div>
 </body>
</html>
