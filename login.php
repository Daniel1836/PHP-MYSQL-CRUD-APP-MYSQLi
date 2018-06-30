<?php
	require 'databaseScript.php';

try{
	if(isset($_POST['username']) && isset($_POST['passw'])){
        if(!empty($_POST['username']) && !empty($_POST['passw'])){

                $cox = connectDB();

		$userName = mysqli_real_escape_string($cox,trim($_POST['username']));
		$password = mysqli_real_escape_string($cox,trim($_POST['passw']));
		
		

		$sql = "SELECT full_name FROM users WHERE username='$userName' 
				and password=SHA('$password')";

		$result = mysqli_query($cox, $sql);
		if($row = mysqli_fetch_array($result)){
			echo "Hello $row[0], You're now logged in ";
                        session_start();
			setcookie('username',"$userName");
                $_SESSION['username']=$userName;
		echo 	 $_SESSION['username'];	
		} else {
			throw new Exception("Wrong username/password");
		}
		
		
	} else {
                throw new Exception("You must type a valid username/password");
		//header("Location: loginform.html");		
	}
	
		} else {
			header("Location: loginform.html");		
		}	

} catch(Exception $e){
		echo "There was an error: ". $e -> getMessage();
		
	} 

	//setcookie('username',"$userName", time()-1);
	//echo $_COOKIE['username'];

if(isset($_SESSION['username'])){
		header("Location: mainpage.php");	
		
	} 

	//echo $_SESSION['username'];
?>