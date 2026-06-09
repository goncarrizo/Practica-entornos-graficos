<?php
// carrito.php - Carrito de compras con sesion
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Agregar producto al carrito
if (isset($_GET['agregar'])) {
    $id = (int)$_GET['agregar'];
    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]++;
    } else {
        $_SESSION['carrito'][$id] = 1;
    }
}

// Quitar producto del carrito
if (isset($_GET['quitar'])) {
    $id = (int)$_GET['quitar'];
    unset($_SESSION['carrito'][$id]);
}

// Vaciar carrito
if (isset($_GET['vaciar'])) {
    $_SESSION['carrito'] = array();
}

$link = mysqli_connect("localhost", "root", "", "Compras")
    or die(mysqli_connect_error());
?>
<html>
<head><title>Carrito de Compras</title></head>
<body>
  <h2>Catalogo de Productos</h2>
  <table border="1" cellpadding="5">
    <tr><th>Producto</th><th>Precio</th><th>Accion</th></tr>
    <?php
    $res = mysqli_query($link, "SELECT * FROM catalogo");
    while ($p = mysqli_fetch_array($res)) {
    ?>
    <tr>
      <td><?php echo $p['producto']; ?></td>
      <td>$<?php echo $p['precio']; ?></td>
      <td>
        <a href="carrito.php?agregar=<?php echo $p['id']; ?>">
          Agregar al carrito
        </a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <h2>Carrito</h2>
  <?php if (count($_SESSION['carrito']) == 0) { ?>
    <p>El carrito esta vacio.</p>
  <?php } else { ?>
    <table border="1" cellpadding="5">
      <tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th><th>Accion</th></tr>
      <?php
      $total = 0;
      foreach ($_SESSION['carrito'] as $id => $cantidad) {
          $r = mysqli_query($link, "SELECT * FROM catalogo WHERE id=$id");
          $p = mysqli_fetch_array($r);
          $subtotal = $p['precio'] * $cantidad;
          $total += $subtotal;
      ?>
      <tr>
        <td><?php echo $p['producto']; ?></td>
        <td>$<?php echo $p['precio']; ?></td>
        <td><?php echo $cantidad; ?></td>
        <td>$<?php echo $subtotal; ?></td>
        <td>
          <a href="carrito.php?quitar=<?php echo $id; ?>">Quitar</a>
        </td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="3"><b>TOTAL</b></td>
        <td><b>$<?php echo $total; ?></b></td>
        <td></td>
      </tr>
    </table>
    <br>
    <a href="carrito.php?vaciar=1">Vaciar carrito</a>
  <?php } ?>

<?php mysqli_close($link); ?>
</body>
</html>