<!DOCTYPE html>
<html>

<head>
<title>
Student Management
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
        top: 35%;
        left: 35%;
        text-align: center;}

</style>

</head>

<body>
<div class="form">
 <h1> Add Students </h1>

<form action="?php echo $_SERVER['PHP_SELF']?" method="POST">
		First Name: <input type="text" name="firstName">
		Last Name: <input type="text" name="lastName">
                Student ID: <input type="text" name="studentid">
                Address: <input type="text" name="address">
                Phone Number: <input type="text" name="number">
                Gender: <input type="text" name="gender">
                Birth Date: <input type="text" name="birth">
                Email: <input type="text" name="email">
                Program ID: <input type="text" name="id">
		<input type="submit" value="Create">
	</form><br>
<a href="updatestudents.php">Update Students</a><br><br>
</div>

<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['studentid']) && !empty($_POST['address']) && !empty($_POST['number']) && !empty($_POST['gender']) && !empty($_POST['birth']) && !empty($_POST['email']) && !empty($_POST['id'])){

			if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['studentid']) && isset($_POST['address']) && isset($_POST['number']) && isset($_POST['gender']) && isset($_POST['birth']) && isset($_POST['email']) && isset($_POST['id'])){	

				
                        $cox = mysqli_connect("localhost", "root", "", "mydb") 

						or die("There was a problem while connecting");

				
        $firstName = $_POST['firstName'];
 	$lastName = $_POST['lastName'];
        $studentid = $_POST['studentid'];
        $address = $_POST['address'];
        $phonenumber = $_POST['number'];
        $gender = $_POST['gender'];
        $birth = $_POST['birth'];
        $email = $_POST['email'];
        $programID = $_POST['id'];
	
	$insert = "INSERT INTO students (student_id, first_name, last_name, address, phone_number, gender, birth_date, email, program_id) 
						VALUES('$studentid','$firstName','$lastName','$address','$phonenumber','$gender','$birth','$email','$programID')";
	
	$result = mysqli_query($cox, $insert)
				or die("There was a problem while executing the insert");
				
	echo "The student was inserted succesfully";
		
	mysqli_close($cox);			

				

			}
                        } else {

				echo "You must enter all fields";				

			}	

			

		}	
                

	?>

</body>

</html>
