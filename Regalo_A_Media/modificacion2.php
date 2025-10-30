<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include("conexion.php");
    $cod = $_POST['codigo'];
    $desc = $_POST['descuento'];
    $precio = $_POST['precio'];
    $detalle = $_POST['detalle'];
    $prod = $_POST['producto'];

    $consulta = "UPDATE productos SET producto='$prod', descuento='$desc', detalle='$detalle',
precio='$precio' WHERE codigo='$cod'";

    mysqli_query($conn, $consulta);
    echo mysqli_error($conn);
    mysqli_close($conn);

    header("LOCATION:listado.php");
}
else{
        header("LOCATION:menu.php");

}
?>