<?php
// estilo.php

// Si el usuario eligio un estilo, lo guardamos en cookie por 30 dias
if (isset($_POST['estilo'])) {
    setcookie("estilo", $_POST['estilo'], time() + (30 * 24 * 60 * 60));
    $estilo_actual = $_POST['estilo'];
} elseif (isset($_COOKIE['estilo'])) {
    $estilo_actual = $_COOKIE['estilo'];
} else {
    $estilo_actual = "claro"; // estilo por defecto
}
?>
<html>
<head>
  <title>Pagina con estilos</title>
  <style>
    body.claro  { background: #ffffff; color: #000000; font-family: Arial; }
    body.oscuro { background: #222222; color: #ffffff; font-family: Arial; }
    body.azul   { background: #dce9f5; color: #003366; font-family: Georgia; }
  </style>
</head>
<body class="<?php echo $estilo_actual; ?>">

  <h2>Pagina con estilos personalizados</h2>
  <p>Estilo actual: <b><?php echo $estilo_actual; ?></b></p>

  <form action="estilo.php" method="post">
    Elegir estilo:
    <input type="radio" name="estilo" value="claro"
      <?php if($estilo_actual=="claro") echo "checked"; ?>> Claro
    <input type="radio" name="estilo" value="oscuro"
      <?php if($estilo_actual=="oscuro") echo "checked"; ?>> Oscuro
    <input type="radio" name="estilo" value="azul"
      <?php if($estilo_actual=="azul") echo "checked"; ?>> Azul
    <br><br>
    <input type="submit" value="Aplicar estilo">
  </form>

</body>
</html>