<!DOCTYPE html>
<html>

<head>

<title>
PHP MYSQL Project
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
        left: 31%;
        text-align: center;}
</style>




</head>

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