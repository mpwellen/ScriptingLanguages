<?php
	// Check to make sure the first letter of each name is
	// uppercase and the remaining letters are lowercase.
	function ValidateName ($fname, $lname)
	{
		// Check the first letter of the first name is uppercase.
		if (!ctype_upper($fname[0]))
		{
			return false;
		}

		// Check the first letter of the last name is uppercase.
		if (!ctype_upper($lname[0]))
		{
			return false;
		}

		// Check the rest of the letters of the first
		// name are lowercase.
		for ($i = 1; $i < strlen($fname); $i++)
		{
			if (ctype_upper($fname[$i]))
			{
				return false;
			}
		}

		// Check the rest of the letters of the last
		// name are lowercase.
		for ($i = 1; $i < strlen($lname); $i++)
		{
			if (ctype_upper($lname[$i]))
			{
				return false;
			}
		}

		return true;
	}
?>

<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
			First name: <input type="text" name="FirstName" /><br />
			Last name: <input type="text" name="LastName" /><br />
			<input type="submit" value="Submit" />
		</form>
		<?php
			if ($_POST)
			{
				$FirstName = $_POST["FirstName"];
				$LastName = $_POST["LastName"];

				if (ValidateName($FirstName, $LastName))
				{
					echo "<br />First and last name are <b>valid</b>.";
				}
				else
				{
					echo "<br />First and/or last name are <b>invalid</b>.";
				}
			}
		?>
	</body>
</html>
