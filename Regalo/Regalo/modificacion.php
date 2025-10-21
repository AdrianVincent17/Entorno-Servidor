<html>
<head></head>
<body>
    <?php
    include("conexion.php");

    $updateCodigo=$_POST['updateCodigo'];
    $consulta="select * from productos WHERE codigo	='$updateCodigo'";
    
    $resultado=mysqli_query($conn,$consulta);
	echo mysqli_error($conn);
	 mysqli_close($conn);

	 $row=mysqli_fetch_array($resultado);

	 $cod=$row['codigo'];
	 $det=$row['detalle'];
	 $pro=$row['producto'];
	 $pre=$row['precio'];
	 $des=$row['descuento'];
    ?>

	<form action="listado.php" method="post">
	<table width="400" border="0">
	<tr>
		<td colspan="4">MODIFICACION DE PRODUCTOS </td>
	</tr>
	<tr>
		<td>Codigo</td> <td><input type="text" name="codigo" value="<?php echo $cod;?>"required /></td>
		<td>Producto</td> <td><input type="text" name="producto" value="<?php echo $pro;?>" required /></td>
	</tr>
	<tr>
		<td>Detalle</td> <td><input type="text" name="detalle" value="<?php echo $det;?>" required /></td>
	</tr>	
	<tr>
		<td>Precio</td> <td><input type="text" name="precio" value="<?php echo $pre;?>" required /></td>
		<td>Descuento</td> <td><input type="text" name="descuento" value="<?php echo $des;?>" required /></td>
	</tr>
	<tr> 
		<td> Imagen </td> <td><input type="file" name="imagen"required /></td>
	</tr>	
	<tr>
		<td colspan="2"><input type="submit" name="button" value="Enviar"/></td>
		<td colspan="2"><input type="reset" name="button2" value="Restablecer"/></td>
	</tr>
	</table>
	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>