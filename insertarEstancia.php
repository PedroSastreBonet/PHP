<?php
include("cap.php");
?>
<h1>FORM INSERT Estancia.</h1>
	<form action="insertEstancia.php" method="post">
			Data Entrada:<input type="datetime" name="data_entrada" /><br/>
			Data Sortida:<input type="datetime" name="data_sortida" /><br/>
			Password:<input type="password" name= "password" /><br/>
			Id_Hotel:<select  name="hotel">
			
		<?php
		require('connexio.php');
		$sql2 = "SELECT * FROM hotel ORDER BY nom";
		$rs2 = mysqli_query($con, $sql2) or die();
		while($row2 = mysqli_fetch_array($rs2)){
			echo "<option value='".$row2['id']."' >";
			echo $row2['nom'];
			echo "</option>";
		}
		?>
		</select><br/>

		Id_Lloc:<select  name="lloc">
		<?php
		$sql2 = "SELECT * FROM lloc ORDER BY nom";
		$rs2 = mysqli_query($con, $sql2) or die();
		while($row2 = mysqli_fetch_array($rs2)){
			echo "<option value='".$row2['id']."' >";
			echo $row2['nom'];
			echo "</option>";
		}
		?>
		</select><br/>

		Id_Client:<select  name="client">
		<?php
		$sql2 = "SELECT * FROM client ORDER BY nom";
		$rs2 = mysqli_query($con, $sql2) or die();
		while($row2 = mysqli_fetch_array($rs2)){
			echo "<option value='".$row2['dni']."' >";
			echo $row2['nom'];
			echo "</option>";
		}
		?>
		</select><br/>
			<input type="submit" value="INSERT"/>
	</form>
	
</body>
</html>