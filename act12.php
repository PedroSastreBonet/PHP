<!DOCTYPE html>
<html>
<head>
	<title>Activitat 12</title>
</head>
<body>
	<?php
	$days= array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	$dia = date("w");
	echo $days[$dia];
	?>
</body>
</html>