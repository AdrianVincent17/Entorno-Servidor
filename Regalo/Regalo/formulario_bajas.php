<html>
<head></head>
<body>
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
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>