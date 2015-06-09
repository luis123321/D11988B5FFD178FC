<?php 
function conectar(){
	$user="root";
	$pass="lae1901";
	$server="localhost";
	$db="prueba";
	$con=mysql_connect($server,$user,$pass) or die("Error al conectar".mysql_error());
	mysql_select_db($db,$con);

	return $con;

}

?>