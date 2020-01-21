<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 8</title>
	</head>
	<body>
		<form method="post" action="act8.php">
			NAME <input type="text" name="n"> <br>
			<input type="radio" name="r" value="no Studies">1. No Studies <br>
			<input type="radio" name="r" value="primary School">2. Primary School <br>
			<input type="radio" name="r" value="secondary School">3. Secondary School <br>
			<input type="radio" name="r" value="university">4. University <br>
			<input type="submit" value="SEND"> <br>
		</form>
		<?php
			$n = $_REQUEST['n'];
			$r = $_REQUEST['r'];
			echo $n . " has " . $r;
		?>
	</body>
</html>