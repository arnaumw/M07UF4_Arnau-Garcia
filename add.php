<html>

<?php
    
include_once("config.php");  
    
if(isset($_POST['Submit'])) {	
    
    //Cojemos los datos rellenados del formulario
	$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli,$_POST['apellido']);
	$edad = mysqli_real_escape_string($mysqli,$_POST['edad']);
    $equipo = mysqli_real_escape_string($mysqli,$_POST['equipo']);
		
	// comprobamos si hay campos vacíos
	if(empty($nombre) || empty($apellido) || empty($edad) || empty($equipo)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>Campo de Nombre vacío.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Campo de Apellido vacío.</font><br/>";
		}
		
		if(empty($edad)) {
			echo "<font color='red'>Campo de Edad vacío.</font><br/>";
		}
        
        if(empty($equipo)) {
			echo "<font color='red'>Campo de Equipo vacío.</font><br/>";
		}

	} else {
			
		//ejecutamos la consulta	
        $result = mysqli_query($mysqli, "INSERT INTO jugadores(id,nombre,apellido,edad,equipo) VALUES(NULL,'$nombre','$apellido', $edad, '$equipo');");
        
		echo "<font color='green'>Usuario añadido correctamente";
	}
}
?>

<head>
	<title>Agregar</title>
</head>

<body>
	<form action="index.php" method="post" >
        <button class="button">Mostrar tabla</button>
    </form>

	<form action="add.php" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr> 
				<td>Edad</td>
				<td><input type="text" name="edad"></td>
			</tr>
            <tr> 
				<td>Equipo</td>
				<td><input type="text" name="equipo"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>