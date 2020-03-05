<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Update Estancia.</h1>
	<?php

		require('connexio.php');
		echo $_REQUEST['pw'];
	
		$sql = "UPDATE estancia SET data_entrada = '".$_REQUEST['data_entrada']."',
				data_sortida = '".$_REQUEST['data_sortida']."',
				password = '".$_REQUEST['pw']."',
				id_hotel = '".$_REQUEST['hotel']."',
				id_lloc = '".$_REQUEST['lloc']."',
				id_client = '".$_REQUEST['client']."' 
				WHERE id ='".$_REQUEST['id']."'";

		echo $sql."<br/>";

		mysqli_query($con, $sql) or die();

		echo "Update realitzat correctament.";

		header("location:taulaEstancia.php");
		exit();

		require('close.php');

	?>
</body>
</html>