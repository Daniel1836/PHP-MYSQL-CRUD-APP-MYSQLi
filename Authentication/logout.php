<?php
	//Cleaning the session data

	$_SESSION = array();

	//Deleting the session ID

setcookie('username','', time()-100);
	if(isset($_COOKIES[session_name()]))
	{
		setcookie(session_name(),'', time()-1);
		
	}

	//Destroying the session

	session_destroy();
	header("Location: loginform.html");	
	
?>
