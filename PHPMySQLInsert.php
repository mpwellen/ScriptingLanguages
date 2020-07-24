<!DOCTYPE html>
<html>
	<body>
		<h1>Register</h1>

		<form method="POST" action="lab11_2.php">
			First name: <input type="text" name="FirstName" /><br />
			Last name: <input type="text" name="LastName" /><br />
			Password: <input type="password" name="PassWord" /><br />
			<input type="submit" value="Register" />
		</form>

		<?php
			// Listen for form submission.
			if ($_POST)
			{
				// Get the form data.
				$FirstName = $_POST["FirstName"];
				$LastName = $_POST["LastName"];
				$PassWord = $_POST["PassWord"];

				// Connect to MySQL and select the CMSC433_Lab11 database.
				// Replace USERNAME and PASSWORD with your MySQL username and password.
				$connection = mysqli_connect("localhost", "USERNAME", "PASSWORD", "CMSC433_Lab11");

				// Check for connection errors.
				if (mysqli_connect_errno())
				{
					die("Fail to connect to MySQL: " . mysqli_connect_error());
				}

				// Sanitize data, i.e. protect against SQL injections.
				$FirstName = mysqli_real_escape_string($con, $FirstName);
				$LastName = mysqli_real_escape_string($con, $LastName);
				$PassWord = mysqli_real_escape_string($con, $PassWord);

				// Generate the username.
				$UserName = $LastName . $FirstName[0];

				// Execute the SQL query to insert new data into the SampleTable table.
				$query = mysqli_query($con, "INSERT INTO SampleTable (firstName, lastName, username, password) VALUES ('$FirstName', '$LastName', '$UserName', '$PassWord');");

				// Check for errors.
				if (!$query)
				{
					mysqli_close($con);
					die("Error executing query: " . mysqli_error($con));
				}

				echo "Registered $FirstName $LastName with username $UserName.";
			}
		?>
	</body>
</html>
