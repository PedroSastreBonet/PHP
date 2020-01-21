<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 5</title>
	</head>
	<body>
		<?php 
			$num = rand(1 , 3);

			echo $num . "<br>";
			
			if ($num == 1) {
				echo "ONE";
			}

			elseif ($num == 2) {
				echo "TWO";
			}

			else {
				echo "THREE";
			}
		?>
	</body>
</html>