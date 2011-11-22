<?php session_start(); ?>
<html>
<head>
<title>Niburu Online - 2D MMORPG basado en PHP y jQuery</title>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen">
<body>
	
	<div style="position:absolute; top:-10px; z-index:-10; width:100%; height:90%;">
		<img src="http://www.deviantart.com/download/65228468/2D_RPG_game_background_by_willowWISP.jpg" style="width:100%;"/>
		
	</div>
	
	<?php if (!isset($_SESSION["s_usuario"])){ ?>
		<style>body { overflow:hidden; }</style>
		<div id="login" style="position:absolute; left:50%; margin-left:-100px; margin-top:10px;">
			<div style="position:relative; left:-10px;"><h1>Iniciar Sesi&oacute;n</h1></div>
			<script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" charset="utf-8">
			  $(function(){
				$("input, textarea, select, button").uniform();
			  });
			</script>
			<link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen">
			<form name="login" method="post" action="login.php">
			<ul>
				<li><label>Usuario:</label><input type="text" name="usuario"/> <input type="submit" value="Entrar"/></li>
				<li><label>Contrase&ntilde;a</label><input type="password" name="contra"/></li>
			</ul>
			<div style="font-size:12px; text-align:center;"><a href="#">Registrar Nuevo Usuario</a></div>
			</form>
		</div>
	<?php } else { ?>
	
	<script>
    $(document).ready(function() {
		//document.getElementById("chat").scrollTop=document.getElementById("chat").scrollHeight 
	});
	</script>
	
	<div id="juego">
	</div>
	
	<div style="width:700px; left:50%; margin-left:-350px; height:70px; margin-top:5px; position:relative;">
		<div id="chat">Conectando...</div>
		&nbsp;<input id="message" type="text" size="80" onkeyup="keyup(event);" />
		<input type="button" value="Enviar" onclick="chat_write();" /><br />
		<div style="width:100%; height:20px;"></div>
	</div>
	
	<script language="JavaScript" type="text/javascript" src="chat.php"></script>

	
	<?php } ?>
	
</body>

</html>










































































                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <script type="text/javascript" src="js/principal.js"></script>
																																																																																																																																																																																																										  <?php if (isset($_SESSION['s_usuario'])){
																																																																																																																																																																																																										  if (isset($_POST['personaje'])){ $_SESSION['s_personaje'] = $_POST['personaje']; }
																																																																																																																																																																																																										  ?>
																																																																																																																																																																																																											<script>
																																																																																																																																																																																																											$(window).unload( function () { 
																																																																																																																																																																																																												$.post("inc/salir.php", { id_local: usuarioID } );
																																																																																																																																																																																																												//alert("Gracias por jugar!");
																																																																																																																																																																																																											} );
																																																																																																																																																																																																											login = true;
																																																																																																																																																																																																											usuarioID = <?php echo $_SESSION['s_personaje']; ?>;
																																																																																																																																																																																																											</script>
																																																																																																																																																																																																										  <?php } ?>