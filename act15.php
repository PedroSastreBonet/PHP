<!DOCTYPE html>
<html>
<head>
	<title>Activitat 15</title>
</head>
<body>
	<form action="act15.php" method="post">
		Username:<input type="text" name="n"> 
		Password:<input type="text" name="p">
		<br>
		<input type="submit" value="Send">
	</form>
	<?php
	$client=array('name'=>'Paco', 'password'=>'paco');
	$n = $_REQUEST["n"];
	$p = $_REQUEST["p"];

	if ($n == $client["name"]) {
		if ($p == $client["password"]) {
			echo "Login correct";
		} else {
			echo "Error, password incorrect";
		}
	} else {
		echo "Error, username doesn't exist";
	}

	?>
</body>
</html>