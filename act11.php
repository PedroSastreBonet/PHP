<!DOCTYPE html>
<html>
<head>
	<title>Activitat 11</title>
</head>
<body>
	<form method="post" action="act11.php">
  	<textarea name="cv">En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.</textarea>
	<br><br>
 	 <input type="submit" value="Send">
	</form>
	<?php
	echo $_REQUEST['cv'];
	?>
</body>
</html>