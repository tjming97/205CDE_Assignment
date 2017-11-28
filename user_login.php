<?php
	session_start();
	require 'connectDB.php';
	
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$sql="SELECT * FROM `user` WHERE `Username`='$username' && `Password`='$password'";
	
		$query=mysqli_query($conn, $sql);
		$row= mysqli_fetch_assoc($query);
		$id= $row['id'];
		$username= $row['Username'];
		
		
		if(($row['Username'] == $username) && ($row['Password'] == $password))
		{
			
			$_SESSION['id'] = $id;
			$_SESSION['username'] = $username;
			
			header( "refresh:0; url= index.php" );
			echo '<script language="javascript">';
			echo 'alert("Log In successful")';
			echo '</script>';
		}
		
		else
		{
			header( "refresh:0; url= register.php" );
			echo '<script language="javascript">';
			echo 'alert("Wrong password or usernsme")';
			echo '</script>';
		}
	}
	
	else
	{
		header( "refresh:0; url= register.php" );
			echo '<script language="javascript">';
			echo 'alert("No log in data")';
			echo '</script>';
	}
?>