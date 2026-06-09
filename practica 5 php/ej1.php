<?php
// ejercicio1.php

$destinatario = "xx@xx.com";
$asunto       = "Correo de prueba con formato HTML";

// Cabeceras para indicar que el cuerpo es HTML
$cabeceras  = "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
$cabeceras .= "From: remitente@xx.com" . "\r\n";

// Cuerpo del mensaje en HTML
$cuerpo = "
<html>
<head><title>Correo de prueba</title></head>
<body>
  <h1>Hola!</h1>
  <p>Este es un correo enviado con <b>formato HTML</b> desde PHP.</p>
  <p>Saludos.</p>
</body>
</html>
";

// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>