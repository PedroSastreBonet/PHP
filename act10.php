<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 10</title>
	</head>
	<body>
		<form method="post" action="act10.php">
			NAME <input type="text" name="n"> <br>
			<select name="s">
 				<option value="1-1000€">1-1000€</option>
  				<option value="1001-3000€">1001-3000€</option>
 				<option value="+3000€">+3000€</option>
			</select>
			<input type="submit" value="SEND"> <br>
		</form>
		<?php
			$n = $_REQUEST['n'];
			$s = $_REQUEST['s'];
			if ($_REQUEST['s']=="+3000€") {
				
				echo $n . " salary: " . $s . " has to pay additional taxes ";
			}

			else {
				echo $n . " salary: " . $s;
			}
		?>
	</body>
</html>