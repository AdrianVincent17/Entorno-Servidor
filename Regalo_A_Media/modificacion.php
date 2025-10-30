<?php
$updateCodigo = $_POST['updateCodigo'];
include("conexion.php");
$consulta = "SELECT * from productos where codigo='$updateCodigo'";
$result=mysqli_query($conn, $consulta);
echo mysqli_error($conn);
$row=mysqli_fetch_array($result);
$cod=$row['codigo'];
$desc=$row['descuento'];
$precio=$row['precio'];
$detalle=$row['detalle'];
$prod=$row['producto'];
$imagen=$row['imagen'];
?>
<form action="modificacion2.php" method="post">
    <table width="400" border="0">
        <tr>
            <td colspan="4">MODIFICACIÓN DE PRODUCTOS </td>
        </tr>
        <tr>
            <td>Codigo</td>
            <td><input type="text" name="codigo" value="<?php echo $cod; ?>" required readonly/></td>
            <td>Producto</td>
            <td><input type="text" name="producto" value="<?php echo $prod;?>" required /></td>
        </tr>
        <tr>
            <td>Detalle</td>
            <td><input type="text" name="detalle" value="<?php echo $detalle;?>" required /></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" name="precio" value="<?php echo $precio;?>" required /></td>
            <td>Descuento</td>
            <td><input type="text" name="descuento" value="<?php echo $desc;?>" required /></td>
        </tr>
       
        <tr>
            <td colspan="2"><input type="submit" name="button" value="Enviar" /></td>
            <td colspan="2"><input type="reset" name="button2" value="Restablecer" /></td>
        </tr>
    </table>
</form>
<?php

?>