<html>
<head></head>
<body>

<h1>Modificacion productos</h1>
<h2>Producto que desea modificar</h2>

    <form action="modificacion.php" method="POST" >
        <select name="updateCodigo" id="updateCodigo">
    <?php

        include("conexion.php");
        $consulta="select codigo from productos";
        $result=mysqli_query($conn,$consulta);

        while($row=mysqli_fetch_array($result)){

            $ruta=$row['imagen'];
            $cod=$row['codigo'];
            echo "<option value=$cod>$cod</option>";
    
        }
    ?>
     </select>
     <input type="submit" value="Modificar">
     </form>
    <?php
    mysqli_close($conn);
  
    ?>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>