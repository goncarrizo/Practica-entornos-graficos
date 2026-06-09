<?php
// usuario_cookie.php

if (isset($_POST['submit'])) {
    // Guardar el nombre en cookie por 7 dias
    setcookie("usuario", $_POST['nombre'], time() + (7 * 24 * 60 * 60));
    $nombre_guardado = $_POST['nombre'];
} elseif (isset($_COOKIE['usuario'])) {
    $nombre_guardado = $_COOKIE['usuario'];
} else {
    $nombre_guardado = "";
}
?>
<html>
<head><title>Cookie de usuario</title></head>
<body>
  <h2>Formulario con cookie de usuario</h2>

  <?php if ($nombre_guardado != "") { ?>
    <p>Ultimo usuario ingresado: <b><?php echo $nombre_guardado; ?></b></p>
  <?php } ?>

  <form action="usuario_cookie.php" method="post">
    Nombre de usuario:
    <input type="text" name="nombre"
           value="<?php echo $nombre_guardado; ?>">
    <br><br>
    <input type="submit" name="submit" value="Guardar">
  </form>

</body>
</html>