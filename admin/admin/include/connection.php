<?php
	session_start();
	$hostname 	= "localhost";
	$username 	= "root";
	$password 	= "";
	$db 		= "webdev";

	$con = mysqli_connect($hostname,$username,$password,$db);
	if(!$con==true)
	{
		echo "database not connected";
	} 
?>