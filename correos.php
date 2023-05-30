<?php
$destinatario = 'luceroangel1507@gmail.com';
// Correo al que se enviará el mensaje
$nombre = $_POST['nombre'];
$nombre = $_POST['email'];
$nombre = $_POST['asunto'];
$nombre = $_POST['mensaje'];

$header = "Enviado desde portfolio";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeOut(\"location.href='index.html' \", 4000)</script>";
