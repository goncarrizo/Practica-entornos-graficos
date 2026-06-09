<?php
// alta.php - Alta de ciudad
include 'db.php';

if (isset($_POST['submit'])) {

    $ciudad     = $_POST['ciudad'];
    $pais       = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $metro      = $_POST['tieneMetro'];

    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            VALUES ('$ciudad', '$pais', $habitantes, $superficie, $metro)";

    mysqli_query($link, $sql) or die(mysqli_error($link));

    echo "<p>Ciudad agregada correctamente.</p>";
    echo "<a href='listar.php'>Ver listado</a> | <a href='alta.php'>Agregar otra</a>";

} else {
?>
<html>
<head><title>Alta de Ciudad</title></head>
<body>
  <h2>Alta de Ciudad</h2>
  <a href="index.php">Volver al menu</a>
  <br><br>
  <form action="alta.php" method="post">

    Ciudad: <input type="text" name="ciudad"> <br><br>
    Pais: <input type="text" name="pais"> <br><br>
    Habitantes: <input type="text" name="habitantes"> <br><br>
    Superficie: <input type="text" name="superficie"> <br><br>
    Tiene Metro:
      <select name="tieneMetro">
        <option value="1">Si</option>
        <option value="0">No</option>
      </select> <br><br>

    <input type="submit" name="submit" value="Guardar">
  </form>
</body>
</html>
<?php } mysqli_close($link); ?>