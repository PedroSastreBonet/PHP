<!DOCTYPE html>
<html>
	<head>
		<title>Activitat 6</title>
	</head>
	<body>
		<?php 
			
			for ($i=1; $i <= 10; $i++) { 
				$num = $i * 2;
				echo $num . "<br>";
			}
			
			$j=1;
			while ($j < 11) {
				$num = $j * 2;
				echo $num . "<br>";
				$j++;
			}

			$k=1;
			do {
				$num = $k * 2;
				echo $num . "<br>";
				$k++;
			} while ($k < 11);
		?>
	</body>
</html>