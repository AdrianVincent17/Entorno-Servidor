<html>
<head></head>
<body>

<h1>Eliminar producto version 2</h1>
<h2>Producto que desea eliminar</h2>

    <form action="bajas2.php" method="POST">
        <select name="deleteCodigo" id="deleteCodigo">
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
     <input type="submit" value="Eliminar">
     </form>
    <?php
    mysqli_close($conn);
    ?>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>