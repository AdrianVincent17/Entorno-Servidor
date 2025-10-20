<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de articulos</title>
</head>
<body>
    <p><a href="menu.php">volver a menu</a>
    <h1>Listado de productos</h1>
    <?php
        include("conexion.php");

        $consulta="SELECT * FROM productos";
        $result=mysqli_query($conn,$consulta);

        //creamos la conexion
        $conn=mysqli_connect('localhost','root','');

        //imprimimos el error si se ha producido
        echo mysqli_error($conn);

        while($row=mysqli_fetch_array($result)){

            $ruta=$row['imagen'];
            echo "<img src='$ruta' width='250'><br>";
            echo ("Código: " .$row['codigo']."<br>"); 
            echo ("Producto: " .$row['producto'] ."<br>");
            echo ("Detalle: " .$row['detalle']."<br>");
            echo ("Precio: " .$row['precio'] ."€"."<br>");
            echo ("Descuento: " .$row['descuento']."%"."<br>");
            echo "<br>";

            mysqli_error($conn);

        }
        mysqli_close($conn);
    ?>
    
</body>
</html>