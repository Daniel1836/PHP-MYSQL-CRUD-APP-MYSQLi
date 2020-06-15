<!DOCTYPE html>
 <html>
  <body>
<?php
	  
//echo $_SESSION['username'];
	  
if(!isset($_COOKIE['username'])){

		header("Location: loginform.html");	

		

	} 
?>
	  
<div class="form">
<a href="studentmanagement.php">Student Management</a><br>
<a href="programmanagement.php">Program Management</a><br>
<a href="addstudtoprog.php">Add Students to Program</a><br>
<a href="reports.php">Reports</a><br>
<br>
<a href="logout.php">LogOut</a>
</div>
 </body>
</html>
