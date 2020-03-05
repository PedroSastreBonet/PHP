<!DOCTYPE html>
	<html>
		<head>
			<title>Activitat 31_2</title>
		</head>
		<body>
			<?php
				$arr=[
					["name"=>"Pedro","email"=>"pedro@inforipoll.com"],
					["name"=>"Tomas","email"=>"tomas@inforipoll.com"],
					["name"=>"Jaume","email"=>"jaume@inforipoll.com"]
				];
				if (isset($_REQUEST["student"])) {
					foreach ($arr as $student) { 
						if ($student["email"]==$_REQUEST["student"]) {
							session_start();
							$_SESSION["name"]=$student["name"];
							echo "Welcome " . $student["name"];
							die();
						}
					}
					echo "Dont exist";
				}
			?>
			
		</body>
	</html>