<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 7</title>
	</head>
	<body>
		<form method="post" action="act7.php">
			NAME <input type="text" name="n">
			<br>
			AGE <input type="text" name="a">
			<br>
			<input type="submit" value="SEND">
			<br>
		</form>
		<?php
			$age = $_REQUEST['a'];
			$name =  $_REQUEST['n'];
			if ($age>= 18) {
				echo $name . " is an adult";
			}

			else {
				echo $name . " is not an adult";
			}
		?>
	</body>
</html>