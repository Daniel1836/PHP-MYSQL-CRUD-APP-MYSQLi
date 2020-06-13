<!DOCTYPE html>
<html>

<head>
<title>
Reports
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
        top: 32%;
        left: 30%;
        text-align: center;}
</style>

</head>

<body>

<div class="form">
 <h1> Search for Students in the College </h1>

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
                    <input type="submit" value="Search">
</form>

 <h1> Search for Students by Program </h1>

<form action="searchstudprog.php" method="get">

	Program <select name="Name">				

		<?php

			$cox = mysqli_connect("localhost", "root", "", "mydb") 

					or die("There was a problem connecting");	

			

			$sql = "select program_id, name from programs";

					

			$result = mysqli_query($cox, $sql) or die("There was a problem searching");



			while($row = mysqli_fetch_array($result)){

				echo "<option value='$row[0]'>$row[1]</option>";				

			}



		?>

	

	</select>

	<input type="submit" value="Search">

</form></div><br>

<table border="1">


<?php 


  if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(!empty($_POST['firstName']) OR !empty($_POST['lastName']) OR !empty($_POST['studentid']) OR !empty($_POST['address']) OR !empty($_POST['number']) OR !empty($_POST['gender']) OR !empty($_POST['birth']) OR !empty($_POST['email']) OR !empty($_POST['id'])){
  if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['studentid']) && isset($_POST['address']) && isset($_POST['number']) && isset($_POST['gender']) && isset($_POST['birth']) && isset($_POST['email']) && isset($_POST['id'])){

$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$studentid = $_POST['studentid'];
$address = $_POST['address'];
$phonenumber = $_POST['number'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$programID = $_POST['id'];
 
$cox = mysqli_connect("localhost", "root", "", "mydb") 
			or die("There was a problem while connecting");

$query= "SELECT student_id, first_name, last_name, address, phone_number, gender, birth_date, email, program_id FROM students
        WHERE student_id='$studentid' OR first_name='$firstName' OR last_name='$lastName' OR address='$address' OR phone_number='$phonenumber' OR gender='$gender' OR birth_date='$birth' OR email='$email' OR program_id='$programID'";


$result = mysqli_query($cox, $query)
				or die("There was a problem while executing the search"); ?>

<tr>
       <th> ID </th>
<th> First Name </th>
<th> Last Name </th>
<th> Address </th>
<th> Phone Number </th>
<th> Gender </th>
<th> Birth Date </th>
<th> E-mail </th>
<th> Program ID </th>
</tr>

<?php
       while ($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>$row[0] </td>";
echo "<td>$row[1] </td>";
echo "<td>$row[2] </td>";
echo "<td>$row[3] </td>";
echo "<td>$row[4] </td>";
echo "<td>$row[5] </td>";
echo "<td>$row[6] </td>";
echo "<td>$row[7] </td>";
echo "<td>$row[8] </td>";
echo "</tr>";
}

mysqli_close($cox);}	

 }else {

				echo "You must enter a field";				

			}	

			
 }

?>
</table>
</body>

</html>
