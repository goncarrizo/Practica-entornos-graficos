<?php
// buscador.php - Buscador de canciones
$resultados = array();
$busqueda   = "";

if (isset($_POST['buscar'])) {
    $busqueda = $_POST['termino'];

    $link = mysqli_connect("localhost", "root", "", "prueba")
        or die(mysqli_connect_error());

    $sql = "SELECT canciones FROM buscador
            WHERE canciones LIKE '%$busqueda%'
            ORDER BY canciones";
    $res = mysqli_query($link, $sql) or die(mysqli_error($link));

    while ($fila = mysqli_fetch_array($res)) {
        $resultados[] = $fila['canciones'];
    }
    mysqli_close($link);
}
?>
<html>
<head><title>Buscador de canciones</title></head>
<body>
  <h2>Buscador de Canciones</h2>

  <form action="buscador.php" method="post">
    Buscar:
    <input type="text" name="termino"
           value="<?php echo $busqueda; ?>" size="30">
    <input type="submit" name="buscar" value="Buscar">
  </form>

  <br>

  <?php if (isset($_POST['buscar'])) { ?>
    <?php if (count($resultados) > 0) { ?>
      <p>Se encontraron <?php echo count($resultados); ?> resultado(s):</p>
      <ul>
        <?php foreach ($resultados as $cancion) { ?>
          <li><?php echo $cancion; ?></li>
        <?php } ?>
      </ul>
    <?php } else { ?>
      <p>No se encontraron canciones con "<?php echo $busqueda; ?>".</p>
    <?php } ?>
  <?php } ?>

</body>
</html>