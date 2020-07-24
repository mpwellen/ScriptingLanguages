<!DOCTYPE html>
<html>
	<body>
		<h1>Login</h1>
		<?php
			// Get the form data.
			$UserName = $_POST["UserName"];
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
			$UserName = mysqli_real_escape_string($con, $UserName);
			$PassWord = mysqli_real_escape_string($con, $PassWord);

			// Execute the SQL query to insert new data into the SampleTable table.
			$query = mysqli_query($con, "SELECT * FROM SampleTable WHERE username = '$UserName'");

			// Check for errors.
			if (!$query)
			{
				mysqli_close($con);
				die("Error executing query: " . mysqli_error($con));
			}

			// Get results as an associative array.
			$row = mysqli_fetch_assoc($query);

			// Check for username match.
			if (mysqli_num_rows($query) == 0)
			{
				mysqli_close($con);
				die("The username $UserName does not exist.");
			}

			echo "Found user with username $UserName.<br />";

			// Check for password match.
			if ($row["password"] != $PassWord)
			{
				mysqli_close($con);
				die("The password for $UserName does not match.");
			}

			echo "Password matches for user $UserName.";

			mysqli_close($con);
		?>
	</body>
</html>