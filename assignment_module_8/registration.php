<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="register.php">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required><br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" required><br><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>

		<input type="submit" value="Register">
	</form>
</body>
</html>
