<?php
// contacto.php

// Si el formulario fue enviado
if (isset($_POST['submit'])) {

    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "webmaster@xx.com";
    $asunto       = "Consulta de: " . $nombre;

    $cabeceras  = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $cabeceras .= "From: " . $email . "\r\n";

    $cuerpo = "
    <html>
    <body>
      <h2>Nueva consulta desde el sitio web</h2>
      <p><b>Nombre:</b> $nombre</p>
      <p><b>Email:</b> $email</p>
      <p><b>Mensaje:</b><br>$mensaje</p>
    </body>
    </html>
    ";

    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo "<p>Gracias $nombre, tu consulta fue enviada correctamente.</p>";
    } else {
        echo "<p>Error al enviar el mensaje. Intentalo de nuevo.</p>";
    }

} else {
    // Mostrar el formulario
?>
<html>
<head><title>Contacto</title></head>
<body>
  <h2>Formulario de Contacto</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Nombre: <br>
    <input type="text" name="nombre" size="30"> <br><br>

    Email: <br>
    <input type="text" name="email" size="30"> <br><br>

    Consulta: <br>
    <textarea name="mensaje" rows="6" cols="40"></textarea> <br><br>

    <input type="submit" name="submit" value="Enviar consulta">

  </form>
</body>
</html>
<?php } ?>