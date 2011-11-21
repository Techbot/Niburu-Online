<?php 
include("config.php");

// El Mapa xD
echo "<style>
#juego{
	width:700px;
	height:500px;
	background:url(img/pasto2.jpg);
	position:relative;
	left:50%;
	margin-left:-350px;
}
</style>";

// Mostrar el jugador local
$localPos = mysql_query("SELECT * FROM personajes WHERE id = '".$_GET['id']."'");
$localPos = mysql_fetch_array($localPos);

$local_div = "
<style>
.localDiv{
width: 30px;
height: 30px;
background:url(img/cabeza.png) no-repeat;
position:absolute;
left:".$localPos['posx']."px;
top:".$localPos['posy']."px;
}
</style>
";

echo $local_div."<div class='localDiv' id='".$localPos['id']."'><div style='position:absolute; width:70px; text-align:center; font-size:12px; left:-20px; top:-18px; color:#000;'><b>".$localPos['nombre']."</b></div></div>";

// Mostrar otros jugadores conectados
$otros = mysql_query("SELECT * FROM personajes WHERE online = '1'");
while ($otro = mysql_fetch_array($otros)){
	if ($otro['id'] != $_GET['id']){
		echo "<div id='".$otro['id']."' style='position:absolute; width:30px; height:30px; background:url(img/cabeza.png) no-repeat; left: ".$otro['posx']."; top: ".$otro['posy']."; color:#000;'><div style='position:absolute; width:70px; text-align:center; font-size:12px; left:-20px; top:-18px;'>".$otro['nombre']."</div></div>";
	}
}


?>