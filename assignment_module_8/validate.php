<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Validation
	if(empty($email) || empty($password)) {
		echo "Both fields are required.";
	} elseif($email == "example@example.com" && $password == "password123") {
		// Redirect to welcome page with first name
		header("Location: welcome.php?fname=John");
		exit();
	} else {
		echo "Invalid login credentials.";
	}
?>
