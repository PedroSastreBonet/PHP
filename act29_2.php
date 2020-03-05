<!DOCTYPE html>
<html>
<head>
	<title>Activitat 29_2</title>
</head>
<body>
	Cookie has been created. <br>
	<a href="act29_1.php">Go to Page</a>
	<?php
	setcookie("nom",$_REQUEST["n"],time()+60*60*24*365,"/");
	?>
</body>
</html>