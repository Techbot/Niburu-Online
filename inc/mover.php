<?php 
include("config.php");

$playerID = $_POST['id_local'];
$posy = $_POST['posy'];
$posx = $_POST['posx'];

if ($posy != ""){
	$localPos = mysql_query("UPDATE personajes SET posy = '".$posy."', online = '1' WHERE id = '".$playerID."'");
}

if ($posx != ""){
	$localPos = mysql_query("UPDATE personajes SET posx = '".$posx."', online = '1' WHERE id = '".$playerID."'");
}

?>