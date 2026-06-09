<?php
// modificar.php - Modificacion de ciudad
include 'db.php';

$id = (int)$_GET['id'];

if (isset($_POST['submit'])) {

    $ciudad     = $_POST['ciudad'];
    $pais       = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $metro      = $_POST['tieneMetro'];

    $sql = "UPDATE Ciudades SET
              ciudad='$ciudad', pais='$pais',
              habitantes=$habitantes, superficie=$superficie,
              tieneMetro=$metro
            WHERE id=$id";

    mysqli_query($link, $sql) or die(mysqli_error($link));

    echo "<p>Ciudad modificada correctamente.</p>";
    echo "<a href='listar.php'>Ver listado</a>";

} else {

    $res = mysqli_query($link, "SELECT * FROM Ciudades WHERE id=$id")
        or die(mysqli_error($link));
    $fila = mysqli_fetch_array($res);
?>
<html>
<head><title>Modificar Ciudad</title></head>
<body>
  <h2>Modificar Ciudad</h2>
  <a href="listar.php">Volver al listado</a>
  <br><br>
  <form action="modificar.php?id=<?php echo $id; ?>" method="post">

    Ciudad:
    <input type="text" name="ciudad"
           value="<?php echo $fila['ciudad']; ?>"> <br><br>

    Pais:
    <input type="text" name="pais"
           value="<?php echo $fila['pais']; ?>"> <br><br>

    Habitantes:
    <input type="text" name="habitantes"
           value="<?php echo $fila['habitantes']; ?>"> <br><br>

    Superficie:
    <input type="text" name="superficie"
           value="<?php echo $fila['superficie']; ?>"> <br><br>

    Tiene Metro:
    <select name="tieneMetro">
      <option value="1" <?php if($fila['tieneMetro']==1) echo 'selected'; ?>>Si</option>
      <option value="0" <?php if($fila['tieneMetro']==0) echo 'selected'; ?>>No</option>
    </select> <br><br>

    <input type="submit" name="submit" value="Guardar cambios">
  </form>
</body>
</html>
<?php } mysqli_close($link); ?>