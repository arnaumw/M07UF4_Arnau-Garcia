<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="mostrar.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#ajaxdata").load("allrecords.php");
			$("#edad_desplegable").change(function(){
				var selected=$(this).val();
				$("#ajaxdata").load("search.php",{selected_age: selected});
			});
			$("#actualizar").click(function(){
				$("#ajaxdata").load("allrecords.php");
			});
		});
        
	</script>

</head>
<body>
<div class="container">
	<br><br>
	<center><h1><strong>TABLA DE JUGADORES NBA</strong></h1></center>
	<br>
	<div class="row">
		
			
		<form method="post" class="form-horizontal">
            <button type="button" name="mostrar" id="mostrar" class="btn btn-primary" onclick="visionTabla()">Mostrar / Ocultar</button>
			<label for="edad" class="control-label col-sm-3 col-sm-offset-2" >Mas jovenes de: </label>
			<div class="col-sm-2" >
				<select name="edad" class="form-control" id="edad_desplegable">
                    <option>---Filtro---</option>
					<option val="25">25</option>
					<option val="30">30</option>
					<option val="35">35</option>
					<option val="40">40</option>
					<option val="45">45</option>
					<option val="50">50</option>
					<option val="55">55</option>
				</select>
			</div>
			<button type="button" name="actualizar" id="actualizar" class="btn btn-primary">Actualizar</button>
            <a href="add.php"><button type="button" name="añadir" id="añadir" class="btn btn-primary">Añadir</button></a>
		</form>

	</div>
	<br><br>
	<div id="ajaxdata" style="display: flex;">
		
	</div>
</div>

</body>
</html>