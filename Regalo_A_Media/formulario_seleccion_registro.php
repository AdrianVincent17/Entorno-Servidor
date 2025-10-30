<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación</title>
</head>

<body>
    <a href="menu.php">Volver al menú</a>
    <h1>Modificación de productos</h1>

    <h2>Producto que desea modificar (Debe conocer el código)</h2>
    <?php
    include("conexion.php");
    //Lógica del fichero
    ?>
    <form action="modificacion.php" method="POST">
        <select name="updateCodigo" id="updateCodigo">
            <?php
            $consulta = "Select codigo from productos";
            $result = mysqli_query($conn, $consulta);
            while ($row = mysqli_fetch_array($result)) {
                $cod = $row['codigo'];
                echo "<option value=$cod>$cod</option>";
            }
            ?>
        </select>
        <input type="submit" value="Modificar">
    </form>
    <?php
    //Cerramos la conexión
    mysqli_close($conn);
    ?>
</body>

</html>