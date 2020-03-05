<!DOCTYPE html>
<html>
	<head>
		<title>Insert</title>
	</head>
	<body>
		<?php 
			require('connexio.php');
			$sql="INSERT INTO estancia (id, data_entrada, data_sortida, password, id_hotel, id_lloc, id_client) values ('','".$_REQUEST['data_entrada']."','".$_REQUEST['data_sortida']."','".$_REQUEST['password']."', '".$_REQUEST['hotel']."', '".$_REQUEST['lloc']."', '".$_REQUEST['client']."')"; 
			if (mysqli_query($con,$sql))  {  
				echo "Inserted row successfully";  
			} else  {  
				echo "Error inserting row: " . mysqli_error($con);  
			} 

			mysqli_close($con);
		?>
	</body>
</html>