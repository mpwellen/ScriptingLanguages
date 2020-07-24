<!DOCTYPE html>
<html>
	<body>
		<h1>Caeser Cipher</h1>
		<form method="POST">
			String: <input type="text" name="UserInput" /><input type="submit" value="Encrypt" />
		</form>
		<?php
			if ($_POST)
			{
				$input = strtoupper($_POST["UserInput"]);
				$shift = ["A" => "D", "B" => "E",
						"C" => "F", "D" => "G",
						"E" => "H", "F" => "I",
						"G" => "J", "H" => "K",
						"I" => "L", "J" => "M",
						"K" => "N", "L" => "O",
						"M" => "P", "N" => "Q",
						"O" => "R", "P" => "S",
						"Q" => "T", "R" => "U",
						"S" => "V", "T" => "W",
						"U" => "X", "V" => "Y",
						"W" => "Z", "X" => "A",
						"Y" => "B", "Z" => "C"];
				$encrypted = "";

				// Loop through each character in the input
				// string. Use input character as index into
				// shift array.
				for ($i = 0; $i < strlen($input); $i++)
				{
					$encrypted[$i] = $shift[$input[$i]];
				}

				echo "<br /><b>Original String:</b>: " . $input;
				echo "<br /><b>Encrypted String:</b> " . $encrypted;
			}
		?>
	</body>
</html>
