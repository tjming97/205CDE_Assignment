<?php
$errors = array();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(preg_match("/\S+/", $_POST['fname']) === 0){
		$errors['fname'] = "* First Name is required.";
	}
	if(preg_match("/\S+/", $_POST['lname']) === 0){
		$errors['lname'] = "* Last Name is required.";
	}
	if(preg_match("/.+@.+\..+/", $_POST['email']) === 0){
		$errors['email'] = "* Not a valid e-mail address.";
	}
	if(preg_match("/.{8,}/", $_POST['password']) === 0){
		$errors['password'] = "* Password Must Contain at least 8 Chanacters.";
	}
	if(strcmp($_POST['password'], $_POST['confirm_password'])){
		$errors['confirm_password'] = "* Password do not much.";
	}
	}
