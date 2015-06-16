<?php 
$server = "localhost";
$user = "root";
$password = "";
$db="yldb";
$dbconnect = mysqli_connect($server,$user,$password,$db) or die("No se pudo conectar a la db por el siguiente error").mysql_error();
?>
