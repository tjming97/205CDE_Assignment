<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "products";
	
	
	$conn = mysqli_connect($servername, $username, $password,$database);
	
	
	if(!$conn)
	{
		die("connection error ".mysqli_connect_error);
	}
	else
	{
		echo '<script language="javascript">';
		print "connection successful";
		echo '</script>';
		
	}
	
	
	
	



?>