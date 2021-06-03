<?php
error_reporting(0);

$databaseHost = 'localhost';
$databaseName = 'project_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

class db{
	var $con;
	function __construct(){
		$this->$con=mysqli_connect("localhost","root","") or die(mysqli_error());
		mysqli_select_db($this->$con,"project_db") or die(mysqli_error());
	}
	public function getTabla(){
		$query="SELECT * from jugadores";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function getTablaFiltro($edad){
		$query="SELECT * from jugadores where edad <= ".$edad."";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
    public function getTablaEliminar($id){
		$query="DELETE FROM jugadores WHERE id=$id";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function closeCon(){
		mysqli_close($this->$con);
	}
}
?>