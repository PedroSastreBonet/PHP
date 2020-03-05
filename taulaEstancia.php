<?php
include("cap.php");
?>
	<h1>Taula Estancia</h1>
	<a href="insertarEstancia.php"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nova Estancia</button></a><br/><br/>
	<table id='dt' class='table table-striped table-bordered' style='width:100%' >
		<thead>
			<tr><th>ID</th><th>Data Entrada</th><th>Data Sortida</th><th>Password</th><th>Id Hotel</th> <th>Id Lloc</th> <th>Id Client</th></tr>
		</thead>
		<tbody>
		<?php
		require('connexio.php');
		$sql="SELECT * FROM estancia"  or die();
		$rs = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['data_entrada']."</td>";
		echo "<td>".$row['data_sortida']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['id_hotel']."</td>";
		echo "<td>".$row['id_lloc']."</td>";
		echo "<td>".$row['id_client']."</td>";
		echo "<td><a href='editarEstancia.php?id=".$row['id']."'><button type='button' class='btn btn-warning'>Editar</button></td>";
		echo "<td><a href='borrar.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Borrar</button></a></td>";
		echo "</tr>";
		}
		?>
		</tbody>
	</table>

	<script>
		
		$(document).ready( function () {
	    	$('#dt').DataTable( {
	    	    dom: 'Bfrtip',
	    	    buttons: [
	    	        { 	extend:'copy', 
	    	        	attr: { id: 'bCopia' } 
	    	        }, 
	    	        	'csv', 'excel', 'pdf', 'print'
	    	    	]
	    	} );
		} );

	</script>
	</body>
</html>