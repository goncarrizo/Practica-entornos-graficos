<?php
// periodico.php

// Noticias de ejemplo para cada categoria
$noticias = array(
    "politica"  => "El gobierno anuncio nuevas medidas economicas para el proximo trimestre.",
    "economia"  => "El dolar cerro a la baja tras el anuncio del banco central.",
    "deportiva" => "La seleccion nacional vencio 3 a 1 en el partido internacional."
);

// Si el usuario eligio un tipo de titular
if (isset($_POST['titular'])) {
    setcookie("titular", $_POST['titular'], time() + (30 * 24 * 60 * 60));
    $tipo = $_POST['titular'];
} elseif (isset($_COOKIE['titular'])) {
    $tipo = $_COOKIE['titular'];
} else {
    $tipo = "todos"; // primera visita: mostrar todos
}
?>
<html>
<head><title>Periodico Digital</title></head>
<body>
  <h1>El Periodico Digital</h1>

  <!-- Formulario para elegir titular -->
  <form action="periodico.php" method="post">
    Mostrar:
    <input type="radio" name="titular" value="politica"
      <?php if($tipo=="politica") echo "checked"; ?>> Politica
    <input type="radio" name="titular" value="economia"
      <?php if($tipo=="economia") echo "checked"; ?>> Economia
    <input type="radio" name="titular" value="deportiva"
      <?php if($tipo=="deportiva") echo "checked"; ?>> Deportiva
    <br><br>
    <input type="submit" value="Ver titular">
  </form>

  <hr>

  <!-- Mostrar noticias segun la cookie -->
  <?php if ($tipo == "todos") { ?>
    <h3>Politica</h3>   <p><?php echo $noticias["politica"]; ?></p>
    <h3>Economia</h3>   <p><?php echo $noticias["economia"]; ?></p>
    <h3>Deportiva</h3>  <p><?php echo $noticias["deportiva"]; ?></p>
  <?php } else { ?>
    <h3><?php echo ucfirst($tipo); ?></h3>
    <p><?php echo $noticias[$tipo]; ?></p>
  <?php } ?>

  <br>
  <a href="borrar_cookie.php">Borrar preferencia</a>

</body>
</html>