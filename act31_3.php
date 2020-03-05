<!DOCTYPE html>
	<html>
		<head>
			<title>Activitat 31_3</title>
		</head>
		<body>
			<?php
				session_start();
				if (isset($_SESSION["name"])) {
					echo "Welcome " . $_SESSION["name"];
				} else {
					echo "You can't view this page.";
				}
			?>
		</body>
	</html>