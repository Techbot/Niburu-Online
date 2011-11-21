<?php session_start(); ?>
<html>
<head>
<title>Niburu Online - 2D MMORPG basado en PHP y jQuery</title>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen">
<body>
	
	<?php if (isset($_SESSION["s_usuario"])){ ?>
		<div style="position:absolute; right:10px; top:10px;"><a href="salir.php">Salir</a></div>
		
		<style>
		#chat{
			
			margin-left:10px;
			float:left;
		}

		#msg{
			width:300px;
			height:470px;
			overflow:auto;
			background:lightblue;
		}
		</style>
		<div id="chat">
		<div id="msg">

		</div>
		<form onsubmit="mensaje = $('#txt').val(); $('#txt').val(' '); return false;">
		<input type="text" id="txt" name="msg" style="width:233px;"/> <input type="submit" onsubmit="" value="Enviar"></form>
		</div>
		<?php include("inc/int_inventario.php"); ?>
	<?php } ?>

	
	
	
	<?php if (!isset($_SESSION["s_usuario"])){ ?>
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
	<div id="juego">
		
	</div>
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