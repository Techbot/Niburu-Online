<?php 

include("config.php");

$playerID = $_POST['id_local'];

$localPos = mysql_query("UPDATE personajes SET online = '0' WHERE id = '".$playerID."'");

?>