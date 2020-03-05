<!DOCTYPE html>
<html>
	<head>
		<title>Conexio</title>
	</head>
	<body>
		<?php 
			$con = mysqli_connect("localhost", "root", "", "hotel_bo");

			if(mysqli_connect_errno($con)){
				echo "Error";
			}
		?>
	</body>
</html>