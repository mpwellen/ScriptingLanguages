<?php
	// Connect to MySQL and select the CMSC433_Lab11 database.
	// Replace USERNAME and PASSWORD with your MySQL username and password.
	$connection = mysqli_connect("localhost", "USERNAME", "PASSWORD", "CMSC433_Lab11");

	// Check for connection errors.
	if (mysqli_connect_errno())
	{
		die("Fail to connect to MySQL: " . mysqli_connect_error());
	}

	// Execure the SQL query to create a new table.
	$query = mysqli_query($connection, "CREATE TABLE `CMSC433_Lab11`.`SampleTable` ( `id` INT NOT NULL AUTO_INCREMENT , `firstName` VARCHAR(20) NOT NULL , `lastName` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`));");

	error_reporting(E_ALL);

	// Check for errors.
	if (!$query)
	{
		mysqli_close($connection);
		die("There was an error executing SQL.");
	}

	mysqli_close($connection);

	echo("Successfully created table.");
?>