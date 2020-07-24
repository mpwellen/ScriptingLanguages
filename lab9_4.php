<!DOCTYPE html>
<html>
	<body>
		<?php
			$xCoord = $_POST["xCoord"];
			$yCoord = $_POST["yCoord"];

			echo "The point (" . $xCoord . ", " . $yCoord . ") is ";

			if ($xCoord == 0 && $yCoord == 0)
			{
				echo "on the <b>origin</b>.";
			}
			elseif ($xCoord != 0 && $yCoord == 0)
			{
				echo "on the <b>x axis</b>.";
			}
			elseif ($xCoord == 0 && $yCoord != 0)
			{
				echo "on the <b>y axis</b>.";
			}
			elseif ($xCoord > 0 && $yCoord > 0)
			{
				echo "in <b>quadrant 1</b>.";
			}
			elseif ($xCoord < 0 && $yCoord > 0)
			{
				echo "in <b>quadrant 2</b>.";
			}
			elseif ($xCoord < 0 && $yCoord < 0)
			{
				echo "in <b>quadrant 3</b>.";
			}
			elseif ($xCoord > 0 && $yCoord < 0)
			{
				echo "in <b>quadrant 4</b>.";
			}
			else
			{
				echo "in outer space!";
			}
		?>
	</body>
</html>
