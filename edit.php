<?php
include_once("config.php");

if(isset($_POST['actualizar']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$edad = mysqli_real_escape_string($mysqli, $_POST['edad']);	
    $equipo = mysqli_real_escape_string($mysqli, $_POST['equipo']);	
	
	// comprobamos si hay campos vacíos
	if(empty($id) || empty($nombre) || empty($apellido) || empty($edad) || empty($equipo)) {	
		
        if(empty($id)) {
			echo "<font color='red'>Campo Id está vacio.</font><br/>";
		}
		
        if(empty($nombre)) {
			echo "<font color='red'>Campo Nombre está vacio.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Campo Apellido está vacio.</font><br/>";
		}
		
		if(empty($edad)) {
			echo "<font color='red'>Campo Edad está vacio.</font><br/>";
		}
        if(empty($equipo)) {
			echo "<font color='red'>Campo Equipo está vacio.</font><br/>";
		}
	} else {	
		//ejecutamos la consulta
		$result = mysqli_query($mysqli, "UPDATE jugadores SET nombre='$nombre',apellido='$apellido',edad='$edad',equipo='$equipo' WHERE id=$id");
		
		//redirigimos a la pagina de inicio otra vez
		header("Location: index.php");
	}
}
?>
<?php
//cogemos la id de la URL
$id = $_GET['id'];

//seleccionamos la fila de la tabla que corresponde a la id
$result = mysqli_query($mysqli, "SELECT * FROM jugadores WHERE id=$id");

//ponemos el contenido en un array
while($res = mysqli_fetch_array($result))
{
	$id = $res['id'];
	$nombre= $res['nombre'];
	$apellido = $res['apellido'];
    $edad = $res['edad'];
    $equipo = $res['equipo'];
}
?>
<html>
<head>	
	<title>Editar</title>
</head>

<body>
	<form action="index.php" method="post" >
        <button class="button">Mostrar tabla</button>
    </form>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
            <tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido" value="<?php echo $apellido;?>"></td>
			</tr>
			<tr> 
				<td>Edad</td>
				<td><input type="text" name="edad" value="<?php echo $edad;?>"></td>
			</tr>
            <tr> 
				<td>Equipo</td>
				<td><input type="text" name="equipo" value="<?php echo $equipo;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="actualizar" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
