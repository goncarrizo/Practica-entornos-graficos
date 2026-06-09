<?php
// recomendar.php

if (isset($_POST['submit'])) {

    $tu_nombre    = $_POST['tu_nombre'];
    $tu_email     = $_POST['tu_email'];
    $amigo_email  = $_POST['amigo_email'];
    $sitio        = "http://www.misitio.com";

    $asunto   = $tu_nombre . " te recomienda visitar un sitio";

    $cabeceras  = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $cabeceras .= "From: " . $tu_email . "\r\n";

    $cuerpo = "
    <html>
    <body>
      <p>Hola!</p>
      <p><b>$tu_nombre</b> te recomienda visitar el siguiente sitio:</p>
      <p><a href='$sitio'>$sitio</a></p>
      <p>Esperamos que te resulte útil. Saludos!</p>
    </body>
    </html>
    ";

    if (mail($amigo_email, $asunto, $cuerpo, $cabeceras)) {
        echo "<p>La recomendacion fue enviada correctamente a $amigo_email.</p>";
    } else {
        echo "<p>Error al enviar. Intentalo de nuevo.</p>";
    }

} else {
?>
<html>
<head><title>Recomendar sitio</title></head>
<body>
  <h2>Recomendar este sitio a un amigo</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Tu nombre: <br>
    <input type="text" name="tu_nombre" size="30"> <br><br>

    Tu email: <br>
    <input type="text" name="tu_email" size="30"> <br><br>

    Email de tu amigo: <br>
    <input type="text" name="amigo_email" size="30"> <br><br>

    <input type="submit" name="submit" value="Enviar recomendacion">

  </form>
</body>
</html>
<?php } ?>