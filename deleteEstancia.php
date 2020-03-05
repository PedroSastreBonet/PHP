<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require('connexio.php');
	$sql = "DELETE FROM estancia WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: taulaEstancia.php");
	exit();
	?>
</body>
</html>