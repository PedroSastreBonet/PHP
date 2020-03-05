<?php
include("cap.php");
?>
	<?php
		require('connexio.php');
		echo $_GET['id'];
		$sql = "SELECT * FROM estancia WHERE id='".$_GET['id']."'";
		$rs = mysqli_query($con, $sql) or die();
		$row = mysqli_fetch_array($rs);
	?>
	<h1>Form Editar Estancia</h1>
	<form action="editaEstancia.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
			Data Entrada:<input type="datetime" name="data_entrada" value="<?php echo $row['data_entrada']; ?>"/><br/>
			Data Sortida:<input type="datetime" name="data_sortida" value="<?php echo $row['data_sortida']; ?>"/><br/>
			Password:<input type="password" name="pw" value="<?php echo $row['password']; ?>"/><br/>
			Id_Hotel:<select  name="hotel">
			
		<?php
		require('connexio.php');
		$sql2 = "SELECT * FROM hotel ORDER BY nom";
		$rs2 = mysqli_query($con, $sql2) or die();
		while($row2 = mysqli_fetch_array($rs2)){
			if($row['id_hotel']==$row2['id']){
				echo "<option value='".$row2['id']."' selected='selected' >";
			}
			else {
				echo "<option value='".$row2['id']."' >";
			}
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
			if($row['id_lloc']==$row2['id']){
				echo "<option value='".$row2['id']."' selected='selected' >";
			}
			else {
				echo "<option value='".$row2['id']."' >";
			}
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
			if($row['id_client']==$row2['dni']){
				echo "<option value='".$row2['dni']."' selected='selected' >";
			}
			else {
				echo "<option value='".$row2['dni']."' >";
			}
			echo $row2['nom'];
			echo "</option>";
		}
		?>
		</select><br/>
			<input type="submit" value="EDIT"/>
	</form>
</body>
</html>