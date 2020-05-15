<?php 
$destino ="nakasclan@gmail.com";
$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$monto =$_POST['monto'];


$destino ="nakasclan@gmail.com";
$asunto ="FUNDACION PANDA";
$carta ="gracias por tu donacio: $nombre";
mail($destino,$asunto,$carta);

?>