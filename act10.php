<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 10</title>
	</head>
	<body>
		<form method="post" action="act10.php">
			NAME <input type="text" name="n"> <br>
			<select>
 				<option value="1-1000€">1-1000€</option>
  				<option value="1001-3000€">1001-3000€</option>
 				<option value="+3000€">+3000€</option>
			</select>
			<input type="submit" value="SEND"> <br>
		</form>
		<?php
			$n = $_REQUEST['n'];
			
		?>
	</body>
</html>