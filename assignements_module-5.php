<!DOCTYPE html>
<html>
<head>
	<title>Assignment 5</title>
</head>
<body>
	<h1><center>Module 5 Assignments</center></h1><br>
	<h2>Task 1: HTML Basics</h2>
	<form method="post" action="">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" placeholder="John Doe" autofocus><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" placeholder="test@gmail.com"><br><br>
		<!--<input type="submit" value="Submit"> -->
		<button type="submit">Submit</button>
	</form>

	<?php
		// Define Person class
		class Person {
			private $name;
			private $email;

			// Setter methods
			public function setName($name) {
				$this->name = $name;
			}

			public function setEmail($email) {
				$this->email = $email;
			}

			// Getter methods
			public function getName() {
				return $this->name;
			}

			public function getEmail() {
				return $this->email;
			}
		}
	?>

	<br><br><h2>Task 2: Basic OOP in PHP</h2>
	<?php
		$person = new Person();
		$person->setName("John Doe");
		$person->setEmail("johndoe@gmail.com");
	
		echo "<strong>Name: </strong>" . $person->getName() . "<br><br>";
		echo "<strong>Email: </strong>" . $person->getEmail() . "<br>";
	?>

	<br><br><h2>Task 3: Superglobal Variables in PHP</h2>
	<?php
	// check if the form was submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// retrieve form data
		$name = $_POST['name'];
		$email = $_POST['email'];

		// create a new instance of the Person class
		$person = new Person();

		// set the name and email properties based on the form data
		$person->setName($name);
		$person->setEmail($email);

		// display the name and email properties on the webpage
		echo "<strong>Name: </strong>" . $person->getName() . "<br><br>";
		echo "<strong>Email: </strong>" . $person->getEmail() . "<br>";
	}
	?>
</body>
</html>


