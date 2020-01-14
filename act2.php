<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 2</title>
	</head>
	<body>
		<?php 
			$num = rand(0,10);
			echo "$num <br>";
			if ($num >= 5) {
				echo "You passed the exam";
			}

			else {
				echo "You failed the exam!";
			}
		?>
	</body>
</html>