<html>
<head>
	<title>Sign Up</title>

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

<head>
<body>
<div class="form">
	<form action="signup.php" method="POST">
		Name <input name="fname"><br>
		Username <input name="uname"><br>
		Password <input type="password" name="passw"><br>
		Re-type Password <input type="password" name="passw2"><br>
		<input type="submit">
	</form></div>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		require 'databaseScript.php';
		$cox = connectDB();
		
		if(isset($_POST['fname'])&&isset($_POST['uname'])&&isset($_POST['passw'])&&isset($_POST['passw2'])){
			$fullName = mysqli_real_escape_string($cox, trim($_POST['fname']));
			$userName = mysqli_real_escape_string($cox, trim($_POST['uname']));
			$password = mysqli_real_escape_string($cox, trim($_POST['passw']));
			$password2 = mysqli_real_escape_string($cox, trim($_POST['passw2']));
		
			if($password == $password2){				
				$insert = "INSERT INTO users (username, password, full_name) 
							VALUES ('$userName', SHA('$password'), '$fullName')";
							
				$result = mysqli_query($cox, $insert) or die("There was a problem executing the query on the database");
					
				echo "The user was inserted";
			} else {				
				echo "<p style='color:red'>Passwords don't match</p>";
			}
			
		}
		
	}

?>	

</body>
</html>