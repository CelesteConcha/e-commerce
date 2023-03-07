<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  <title>Example Popup</title>
  <style>
    
    #popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      border: 1px ;
      padding: 0;
    }

    @media only screen and (max-width: 600px) {
      #popup {
        width: 90%;
      }
    }
    #popup img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #close {
      position: absolute;
      top: 5px;
      right: 5px;
      font-size: 20px;
      background-color: transparent;
      border: none;
      color: white; 
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div id="popup">
  <img id="imagen" src="<?php echo base_url()?>/imagenes/Anuncio.jpg">
    <button id="close">X</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      if (document.cookie.indexOf("popupShown=true") < 0) {
        // Show the popup
        $("#popup").show();

        // Set a cookie to indicate that the popup has been shown
        var date = new Date();
        date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000)); // Set the cookie to expire in 7 days
        document.cookie = "popupShown=true; expires=" + date.toUTCString() + "; path=/";
      }

      // seleccionamos el botón "X" y el contenedor del anuncio emergente
      var closeButton = $("#close");
      var popup = $("#popup");

      // creamos una función para cerrar el anuncio emergente
      function closePopup() {
        popup.hide();
      }

      // agregamos un evento de clic al botón "X"
      closeButton.on("click", function(event) {
        event.preventDefault(); // prevenimos el comportamiento predeterminado del botón
        closePopup(); // cerramos el anuncio emergente
      });
    });
  </script>


</body>
</html>
