<?php 
$user="root";
$host="localhost";
$password="";
$database = "NiburujQuery";

$con = mysql_connect($host,$user,$password) or die("Error al conectar al Servidor.");
$db = mysql_select_db($database,$con) or die ("Error al seleccionar base de datos.");

?>