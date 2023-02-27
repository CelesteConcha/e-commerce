<html>
<head>
  <meta charset="utf-8">
  <style>
.image-container {
  position: relative;
  display: inline-block;
  width: 100%;
  
}

.image-container img {
  display: block;
  width: 100%;
  height:70%;
 
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: row;
  padding: 2rem;
  box-sizing: border-box;
}

</style>
</head>
<body>
<div class="image-container">
  <img id="imagen" src="<?php echo base_url()?>/imagenes/Banner1.gif"  alt="" usemap="#image-map">
  <map name="image-map">
    <area title="down" coords="95,267,22" shape="circle" href="#" onclick="cambiarImagen('<?php echo base_url()?>/imagenes/banner2.gif')">
    <area title="up" coords="95,200,23" shape="circle" href="#" onclick="cambiarImagen('<?php echo base_url()?>/imagenes/Banner1.gif')">
    <area title="Ok" coords="1261,110,22" shape="circle" href="register" >
    <area target="" alt="your turn" title="your turn" href="register" coords="1001,297,673,249" shape="rect">
    <area target="" alt="Salir" title="Salir" href="https://www.google.com" coords="738,308,971,341" shape="rect">
</map>
<script>
 function cambiarImagen(nuevaImagen) {
    document.getElementById("imagen").src = nuevaImagen;
  }

</script>
</body>
</html>