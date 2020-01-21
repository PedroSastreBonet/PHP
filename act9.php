<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 9</title>
	</head>
	<body>
		<form method="post" action="act9.php">
			NAME <input type="text" name="n"> <br>
			<input type="checkbox" name="c1" value="football">Football <br>
			<input type="checkbox" name="c2" value="tennis">Tennis <br>
			<input type="checkbox" name="c3" value="basketball">Basketball <br>
			<input type="checkbox" name="c4" value="golf">Golf <br>
			<input type="submit" value="SEND"> <br>
		</form>
		<?php
			$n = $_REQUEST['n'];
			$num = 0;

			echo $n . " plays: " . "<br>";

			if (isset($_REQUEST['c1'])) {
				echo "Football" . "<br>";
				$num++;
			}

			if (isset($_REQUEST['c2'])) {
				echo "Tennis" . "<br>";
				$num++;
			}

			if (isset($_REQUEST['c3'])) {
				echo "Basketball" . "<br>";
				$num++;
			}

			if (isset($_REQUEST['c4'])) {
				echo "Golf" . "<br>";
				$num++;
			}

			echo "A total of " . $num . " sports.";
		?>
	</body>
</html>