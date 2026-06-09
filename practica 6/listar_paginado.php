<?php
// listar_paginado.php - Listado con paginacion
include 'db.php';

$registros_por_pagina = 3;
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $registros_por_pagina;

// Total de registros
$total_res = mysqli_query($link, "SELECT COUNT(*) FROM Ciudades");
$total_fila = mysqli_fetch_array($total_res);
$total_registros = $total_fila[0];
$total_paginas = ceil($total_registros / $registros_por_pagina);
?>
<html>
<head><title>Ciudades - Paginado</title></head>
<body>
  <h2>Listado de Ciudades (paginado)</h2>
  <a href="index.php">Volver al menu</a>
  <br><br>

  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th><th>Ciudad</th><th>Pais</th>
      <th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th>
      <th>Acciones</th>
    </tr>
    <?php
    $sql = "SELECT * FROM Ciudades ORDER BY id 
            LIMIT $inicio, $registros_por_pagina";
    $resultado = mysqli_query($link, $sql)
        or die(mysqli_error($link));

    while ($fila = mysqli_fetch_array($resultado)) {
    ?>
    <tr>
      <td><?php echo $fila[0]; ?></td>
      <td><?php echo $fila[1]; ?></td>
      <td><?php echo $fila[2]; ?></td>
      <td><?php echo $fila[3]; ?></td>
      <td><?php echo $fila[4]; ?></td>
      <td><?php echo ($fila[5] == 1) ? "Si" : "No"; ?></td>
      <td>
        <a href="modificar.php?id=<?php echo $fila[0]; ?>">Modificar</a> |
        <a href="baja.php?id=<?php echo $fila[0]; ?>"
           onclick="return confirm('Confirma la baja?')">Baja</a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <br>
  <!-- Links de paginacion -->
  <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
    <a href="listar_paginado.php?pagina=<?php echo $i; ?>">
      <?php echo $i; ?>
    </a> &nbsp;
  <?php } ?>

  <p>Pagina <?php echo $pagina; ?> de <?php echo $total_paginas; ?></p>

<?php
mysqli_free_result($resultado);
mysqli_close($link);
?>
</body>
</html>