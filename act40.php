<html> 
<head> 
  <title>Activitat 40</title> 
</head> 
<style>
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 4px;
}

</style>
<body> 
<br>
<h2>Table</h2>
<br>
<?php 

function asc($n) { 
$ascii=sprintf("%c",$n); 
return $ascii; 
} 
?> 
<table> 
	<?php
	for ($i=32;$i<=255;$i++){
	 if ($i%32==0){
	 echo "<tr><td>$i  ".asc($i)."</td> ";
	 }else{	
       echo "<td>$i  ".asc($i)."</td> ";
      }

    }
    ?>
</tr> 
  
</table> 
</body>
</html> 