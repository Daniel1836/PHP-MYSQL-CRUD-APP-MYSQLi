<!DOCTYPE html>
<html>
 <body>
  <div class="form">
    <h1> Add Students to Program </h1>

<form action="addsp.php" method="get">

	Student <select name="studentid">				

		<?php

			$cox = mysqli_connect("localhost", "root", "", "mydb") 

					or die("There was a problem connecting");	

		
			$sql = "select student_id, first_name, last_name from students";

					
			$result = mysqli_query($cox, $sql) or die("There was a problem searching");


			while($row = mysqli_fetch_array($result)){

				echo "<option value='$row[0]'>$row[1] $row[2]</option>";				

			}

		?>

	</select>

	
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
	
            <input type="submit" value="Submit">


    </form>
   </div>


 </body>
</html>
