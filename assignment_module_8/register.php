<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// Validation
	if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
		echo "All fields are required.";
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email address.";
	} elseif($password != $confirm_password) {
		echo "Password and confirm password do not match.";
	} else {
		// Success
		echo "Registration successful.";
	}
?>
