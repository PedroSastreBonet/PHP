<!DOCTYPE html>
	<html>
		<head>
			<title>Activitat 34</title>
		</head>
		<body>
			<?php
				$im = imagecreatetruecolor(55, 30);
				$amarillo = imagecolorallocate($im, 255, 255, 0);
				$negro = imagecolorallocate($im, 0, 0, 0);

				imagefilledrectangle ($im,0,0,55,30,$amarillo);

				imageString($im,13,0,10,"Button",$negro);


				imagepng($im, './imagefilledrectangle.png');
				imagedestroy($im);

			?>
		</body>
	</html>