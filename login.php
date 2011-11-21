<?php 
session_start();
include("inc/config.php");

if (!isset($_SESSION["s_usuario"])) {

	$usuario = $_POST['usuario'];   
    $password = $_POST["contra"];
	 
    $result = mysql_query("SELECT * FROM usuarios WHERE usuario='".$usuario."'");
    
    if($row = mysql_fetch_array($result)){
            if($row["password"] == $password){
				
                $_SESSION["s_usuario"] = $row['usuario'];
				$_SESSION["s_id"] = $row['id'];
               
                //Elimina el siguiente comentario si quieres que re-dirigir autom&aacute;ticamente a index.php
				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script><script>
				$(document).ready(function() {
					location.href='./login.php';
				});
				</script></html>";
				
				
            }else{
                echo 'Contrase&ntilde;a incorrecta...';
				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script><script>
				$(document).ready(function() {
					location.href='./index.php';
				});
				</script></html>";
            }
        } else{
            echo '<html><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script><body>Datos incorrectos, redirigiendo al inicio....</body>';
			echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script><script>
		    $(document).ready(function() {
				location.href='./index.php';
			});
			</script></html>";
        }
        @mysql_free_result($result);
    
    mysql_close();
} else { 
?>
<html>
<head>
<title>Niburu Online - Elige tu personaje</title>
</head>
<body>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen">
	<script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
			  $(function(){
				$("input, textarea, select, button").uniform();
			  });
	</script>
	<link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen">
	<div id="elegir" style="position:relative; left:50%; margin-left:-150px; top:20px;">
		<form name="personaje" method="post" action="index.php">
		<ul>
		<li>
		<label>Elige un personaje:</label>
		<select name="personaje" style="width:200px;">
							<option value="todas" selected>Selecciona un Personaje</option>
							<?php $personajes = mysql_query("SELECT * FROM personajes WHERE id_usuario = '".$_SESSION["s_id"]."'"); 
							while ($pers = mysql_fetch_array($personajes)){
							?>
							<option value="<?php echo $pers['id'] ?>"><?php echo $pers['nombre'] ?></option>
							<?php } ?>
							
		</select> <input type="submit" value="Seleccionar"/>
		</li>

		</ul>
		</form>
		
		
	</div>
</body>
</html>
<?php } ?>