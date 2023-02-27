<!DOCTYPE html>
<html>
<head>
	<title>Chatbot Flotante</title>
	<style>
	.chatbot-container {
		  position: fixed;
		  bottom: 20px; /* Puedes ajustar la posición vertical */
		  right: 20px; /* Puedes ajustar la posición horizontal */
		}

		#chatbot-button {
		  position: relative;
		  width: 60px;
		  height: 60px;
		  border-radius: 50%;
		  background-color: transparent; /* Puedes cambiar el color de fondo */
		  color: #fff;
		  font-size: 24px;
		  font-weight: bold;
		  cursor: pointer;
		  background-image: url(<?php echo base_url()?>/imagenes/icons/chb.png); /* Ruta de la imagen */
		  background-size: cover;
		  background-position: center;
		}

		#chatbot {
		  position: absolute;
		  bottom: 70px;
		  right: 0;
		  width: 300px; /* Puedes ajustar el ancho */
		  height: 400px; /* Puedes ajustar la altura */
		  background-color: #fff;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		  z-index: 9999;
		  display: none;
		  overflow: hidden;
		}

		#chatbot .chatbot-header {
		  padding: 10px;
		  background-color: #f6f6f6;
		  border-bottom: 1px solid #ccc;
		}

		#chatbot .chatbot-header h4 {
		  margin: 0;
		  font-size: 16px;
		  font-weight: bold;
		  color: #333;
		}

		#chatbot .chatbot-header .close-button {
		  position: absolute;
		  top: 10px;
		  right: 10px;
		  cursor: pointer;
		  font-size: 24px;
		  font-weight: bold;
		  color: #999;
		}

		#chatbot .chatbot-body {
		  padding: 10px;
		  height: 320px;
		  overflow-y: auto;
		}

		#chatbot .chatbot-input {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  padding: 10px;
		  border-top: 1px solid #ccc;
		  background-color: #f6f6f6;
		}

		#chatbot .chatbot-input input[type=text] {
		  width: 80%;
		  padding: 10px;
		  border: none;
		  border-radius: 4px;
		  margin-right: 10px;
		}

		#chatbot .chatbot-input button {
		  width: 19%;
		  padding: 9px;
		  border: none;
		  border-radius: 4px;
		  background-color: #0084ff;
		  color: #fff;
		  cursor: pointer;
		}
	</style>
</head>
<body>
	<div style="position: fixed; bottom: 20px; right: 20px;">
		<button id="chatbot-button" onclick="openChatbot()"></button>
		<div id="chatbot" style="position: absolute; bottom: 0; right: 0; width: 250px; height: 400px; background-color: #fff; border: 1px solid #ccc; border-radius: 4px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); z-index: 9999; display: none; overflow: hidden;">
			<div class="chatbot-header">
				<h4>Bienvenido, ¿en qué puedo ayudarte?</h4>
				<button class="close-button" onclick="closeChatbot()">
					<span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">x</span>
				</button>
			</div>
			<div class="chatbot-body" id="chatbot-body"></div>
			<div class="chatbot-input" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 10px;">
				<form onsubmit="enviarMensaje(); return false;">
					<input type="text" id="input-mensaje" placeholder="Escribe un mensaje..." style="width: 80%; padding: 10px;">
					<button type="submit" style="width: 19%; padding: 9px;">Enviar</button>
				</form>
			</div>
		</div>
	</div>

	<script>
		function closeChatbot() {
			var chatbot = document.getElementById("chatbot");
			chatbot.style.display = "none";
		}

		function openChatbot() {
			var chatbot = document.getElementById("chatbot");
			if (chatbot.style.display === "none") {
				chatbot.style.display = "block";
			} else {
				chatbot.style.display = "none";
			}
		}

		// Obtenemos el elemento div del chatbot
		var chatbot = document.getElementById("chatbot");

		// Función para agregar un mensaje de entrada al chatbot
		function addMensajeEntrada(mensaje) {
			var nuevoMensaje = document.createElement("div");
			nuevoMensaje.className = "mensaje-entrada";
			nuevoMensaje.innerHTML = mensaje;

			// Agregamos el nuevo mensaje como último hijo del div de chatbot-body
			var chatbotBody = document.getElementById("chatbot-body");
			chatbotBody.appendChild(nuevoMensaje);
		}

		// Función para agregar un mensaje de salida al chatbot
		function addMensajeSalida(mensaje) {
			var nuevoMensaje = document.createElement("div");
			nuevoMensaje.className = "mensaje-salida";
			nuevoMensaje.innerHTML = mensaje;

  // Agregamos el nuevo mensaje como último hijo del div de chatbot-body
  var chatbotBody = document.getElementById("chatbot-body");
  chatbotBody.appendChild(nuevoMensaje);
}

// Función para agregar un mensaje de salida al chatbot
function addMensajeSalida(mensaje) {
  var nuevoMensaje = document.createElement("div");
  nuevoMensaje.className = "mensaje-salida";
  nuevoMensaje.innerHTML = mensaje;

  // Insertamos el nuevo mensaje antes del primer hijo del div de chatbot-body
  var chatbotBody = document.getElementById("chatbot-body");
  chatbotBody.insertBefore(nuevoMensaje, chatbotBody.firstChild);
}



  // Función para procesar la entrada del usuario y generar una respuesta
  function procesarEntrada(entrada) {
    if (entrada == "hola") {
      addMensajeSalida("¡Hola! ¿En qué puedo ayudarte hoy?");
    } else if (entrada == "Quiero comprar un producto") {
      addMensajeSalida("¿Qué tipo de producto estás buscando?");
    } else if (entrada == "Una laptop para jugar") {
      addMensajeSalida("Tenemos varias opciones de laptops para jugar. ¿Te gustaría ver nuestras recomendaciones?");
    } else {
      addMensajeSalida("Lo siento, no he entendido tu solicitud. ¿Podrías intentar de nuevo?");
    }
  }

  // Función para procesar la entrada del usuario cuando se presiona la tecla Enter
  function procesarTecla(event) {
    if (event.keyCode == 13) {
      var entrada = event.target.value;
      var inputMensaje = document.getElementById("input-mensaje");
      inputMensaje.value = ""; // Limpiamos el input
      addMensajeEntrada(entrada); // Agregamos el mensaje de entrada al chatbot
      procesarEntrada(entrada);
    }
  }

  function enviarMensaje() {
  var mensaje = document.getElementById("input-mensaje").value;
  var nuevoMensaje = document.createElement("div");
  nuevoMensaje.innerHTML = mensaje;
  document.getElementById("chatbot-body").appendChild(nuevoMensaje);
  document.getElementById("input-mensaje").value = "";
}
</script>
</body>
</html>





