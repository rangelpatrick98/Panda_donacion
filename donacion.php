<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset="UTF-8">
  <title>Donacion</title>
<link rel="stylesheet" href="cs/style2.css">

</head>
<body>
  <ul id="menu">
    <ul>
       <center>
        <li><a href="index.php">INICIO</a></li>
        <li id="SADOPTA"><a href="Nosotros.php">ADOPTA</a></li>
        <li id="SDONA"><a href="donacion.php">Donación</a></li>
        <li id="SCOMOAYUDAR"><a href="ayuda.php">Cómo ayudar</a></li>
       </center>
    </ul>
 </ul>
  <center>
<form action="correo.php" method="post" class="form-register">
  <h4>AYUDA A UN OSO PANDA </h4>
<input class="controls" type="text" name="nombre" id="nombre" placeholder="INGRESE SU NOMBRE">
<input class="controls" type="text" name="correo" id="correo" placeholder="INGRESE SU CORREO ELECTRONICO">
<input class="controls" type="text" name="monto" id="monto" placeholder="INGRESE EL MONTO">
<p> GRACIAS POR TU DONACIÓN</p>
<input class= "botons" type= "submit" value= "DONAR AHORA">

</form>
</center>
</body>
</html>