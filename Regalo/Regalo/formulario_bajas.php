<html>
<head></head>
<body>
<form action="altas.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Eliminacion de productos</legend>

        <label for="eliminar">Producto para eliminar</label>
        <select name="eliminar" id="eliminar" disabled="disabled">
        </select>

        <input type="submit" value="eliminar">
        
    </fieldset>
    <?php

        include("conexion.php");

        $consulta="select * from productos";
        $result=mysqli_query($conn,$consulta);

         //creamos la conexion
        $conn=mysqli_connect('localhost','root','');

        echo mysqli_error($conn);

        while($row=mysqli_fetch_array($result)){

            $ruta=$row['imagen'];
            $cod=$row['codigo'];
            echo "<img src='$ruta' width='250'><br>";
            echo ("Código: " .$row['codigo']."<br>"); 
            echo ("Producto: " .$row['producto'] ."<br>");
            echo ("Detalle: " .$row['detalle']."<br>");
            echo ("Precio: " .$row['precio'] ."€"."<br>");
            echo ("Descuento: " .$row['descuento']."%"."<br>");
            echo "<br>";
            echo "<a href='bajas.php?codEliminar=$cod'>Eliminar producto</a><br><br>";

            mysqli_error($conn);

        }
        mysqli_close($conn);



    ?>


	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>