
<table class="table table-striped table-responsive">
	<tr>
		<!--<th>Id</th>-->
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Edad</th>
		<th>Equipo</th>
        <th>Acciones</th>
	</tr>
<?php
require('config.php');
$db = new db;

$result1=$db->getTablaEliminar($_GET['id']);
    
header("Location:index.php");

$db->closeCon();
?>
</table>