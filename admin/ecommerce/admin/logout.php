<?php
	include 'include/connection.php';
	unset($_SESSION['user_id']);
	session_destroy();
	header("location:login.php");
	die();
?>