<?php
	require("connectDB.php");

	
	if(isset($_POST['username']) && ($_POST['email']) && ($_POST['password']) && ($_POST['c_password']) )
	{
		
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
		
		
		if($_POST['password'] != $_POST['c_password'] ) {
	
			header( "refresh:0; url= register.php#toregister" );
			echo '<script language="javascript">';
			echo 'alert("Your password did not match the confirm password")';
			echo '</script>';
	
		}	
			
		else{
			
		$insertQuery="INSERT INTO user( `Username`, `Password`, `email`) VALUES ('$username', '$password', '$email')";
		if(mysqli_query($conn, $insertQuery))
		{
			header( "refresh:0; url= register.php" );
			echo '<script language="javascript">';
			echo 'alert("Register successful")';
			echo '</script>';
		}
		
		else
		{
			header( "refresh:0; url= register.php" );
			echo '<script language="javascript">';
			echo 'alert("Register failed")';
			echo '</script>';
		}
	}
	}
?>