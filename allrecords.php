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
    
    $result=$db->getTabla();
			
    while($res=mysqli_fetch_array($result)){
				
        echo "<tr>
                <!--<td>".$res['id']."</td>-->
				<td>".$res['nombre']."</td>
				<td>".$res['apellido']."</td>
				<td>".$res['edad']."</td>
				<td>".$res['equipo']."</td>
                <td><a href=\"edit.php?id=$res[id]\" onClick=\"return confirm('Estas seguro de que quieres editar?')\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Estas seguro de que quieres eliminar?')\">Eliminar</a></td>
            </tr>";
    }
			
    $db->closeCon();
			
    ?>
    
</table>