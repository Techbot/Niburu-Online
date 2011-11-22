// Teclas del juego
var KEY = {
	// Jugador 1
	UP: 38,
	DOWN: 40,
	LEFT: 37,
	RIGHT: 39,
	ENTER: 13
}

var areaHeight = parseInt($("#juego").height());
var areaWidth = parseInt($("#juego").width());
var usuarioID = "";
var login = false;
var niburu = {}

// Un arreglo para guardar las teclas presionadas
niburu.pressedKeys = [];

$(function(){

	// Intervalo del Game Loop en milisegundos
	niburu.timer = setInterval(gameloop,100);
	
	// Guarda si una tecla está presionada en la variable "pressedKeys"
	$(document).keydown(function(e){
		niburu.pressedKeys[e.keyCode] = true;
    });
    $(document).keyup(function(e){
    	niburu.pressedKeys[e.keyCode] = false;
	});
});

// Función llamada cada ciertos milisegundos
function gameloop()
{	
	if (login == true){
		moverPlayer();
		$("#juego").load("inc/main.php?id=" + usuarioID);

	}
	
}

function moverPlayer()
{ 
	
		// Usando el "Timer" comprobamos cada milisegundo si está oprimida. 
		if (niburu.pressedKeys[KEY.UP]) // Flecha arriba
		{
			// Mover jugador 2 hacia arriba
			var top = parseInt($("#" + usuarioID).css("top"));
			
			// Limitar movimiento sin salir del área
			if (top >= 10){
				$("#" + usuarioID).css("top",top-10);
				console.log("Moviendo hacia arriba: " + top);
				$.post("inc/mover.php", { posy: parseInt($("#" + usuarioID).css("top")), id_local: usuarioID } );
			}
		}
		
		if (niburu.pressedKeys[KEY.DOWN]) // Flecha abajo
		{
			// Mover jugador 2 hacia abajo
			var top = parseInt($("#" + usuarioID).css("top"));
			
			// Limitar jugador hacia abajo
			if ((parseInt($("#" + usuarioID).css("top"))) <= (areaHeight - (parseInt($("#" + usuarioID).css("height")) + 10))){
				$("#" + usuarioID).css("top",top+10);
				$.post("inc/mover.php", { posy: parseInt($("#" + usuarioID).css("top")), id_local: usuarioID } );
			}
		}
		
		if (niburu.pressedKeys[KEY.LEFT]) // Flecha arriba
		{
			// Mover jugador 2 hacia arriba
			var left = parseInt($("#" + usuarioID).css("left"));
			
			// Limitar movimiento sin salir del área
			if (left >= 10){
				$("#" + usuarioID).css("left",left-10);
				$.post("inc/mover.php", { posx: parseInt($("#" + usuarioID).css("left")), id_local: usuarioID } );
			}
		}
		
		if (niburu.pressedKeys[KEY.RIGHT]) // Flecha abajo
		{
			// Mover jugador 2 hacia abajo
			var left = parseInt($("#" + usuarioID).css("left"));
			
			// Limitar jugador hacia abajo
			if ((parseInt($("#" + usuarioID).css("left"))) <= (areaWidth - (parseInt($("#" + usuarioID).css("width")) + 10))){
				$("#" + usuarioID).css("left",left+10);
				$.post("inc/mover.php", { posx: parseInt($("#" + usuarioID).css("left")), id_local: usuarioID } );
			}
		}
		
	
}