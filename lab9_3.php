<!DOCTYPE html>
<html>
	<body>
		<?php
			$st = $_POST["xCoord"];
			//$str = $_POST["yCoord"];
			function myTest() {
				$result = substr_count($GLOBALS['st'], ' ');
				$resultB = substr_count($GLOBALS['st'],',');
				$resultC = substr_count($GLOBALS['st'],'?');
				$resultD = substr_count($GLOBALS['st'],'!');
				$resultE = substr_count($GLOBALS['st'],'.');
				$resultF = substr_count($GLOBALS['st'],';');
				$count=0;
				echo 'spaces: ' . $result;
				$resultG = $resultB + $resultC + $resultD + $resultE + $resultF;
				//echo $resultG;
				echo 'punctuation: ' . $resultG;
				//echo 'punctuation is' +($resultB + $resultC + $resultD + $resultE + $resultF);
			}
			myTest();
			/*$result = substr_count($xCoord, ' ');
			$resultB = substr_count($str,',');
			$resultC = substr_count($str,'?');
			$resultD = substr_count($str,'!');
			$resultE = substr_count($str,'.');
			$resultF = substr_count($str,';');
			$count=0;
			//$count=$count+1;
			echo $count;
			echo $result + $resultB + $resultC + $resultD + $resultE + $resultF;*/
			
		?>
	</body>
</html>
