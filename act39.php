<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Activitat 39</title>
	<link rel="stylesheet" href="">

</head>
<body>
   
<h3>Salary</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Name: <input type="text" name="n"> <br><br>
Email: <input type="email" name="e"> <br><br> 
Salary: <input type="number" name="s"> <br><br> 

<input type="submit" name="submit" value="Submit"><br><br>

</form>
 
 <?php
   
if(isset($_POST['submit'])) {

   if ( isset($_REQUEST['s'])){ $s = $_REQUEST['s']; } else { $s = 0; };
    
   printf("salary as a number with 8 digits: %'08d  €<br>",$s); 

   }

?>
	
</body>
</html>