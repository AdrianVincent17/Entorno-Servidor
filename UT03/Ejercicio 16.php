<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Matriz</title>
</head>
<body>

<?php

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $num1=$_POST['num1'];
    }

    include("funciones/funciones.php");

?>
    
   <form action="" method="post">
    <fieldset>

        <legend>Matriz cuadrada</legend>
        <br>    
        <input type="number" name="num1" id="num1" min="1" max="20" placeholder="Dime un numero del 1-20">
        <input type="submit">
        <br>
        <br>

        <?php

        if(isset($num1)){

            GenerarMatriz($num1);
        }

        ?>
    </fieldset>
   </form>
</body>
</html>