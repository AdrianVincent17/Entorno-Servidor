<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    <?php
    include("funciones.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $cadena = $_POST['cadena'];
        $palabra = $_POST['palabra'];
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Cadenas</legend>
            <br>
            <input type="text" id="cadena" name="cadena" size="200" maxlength="400" placeholder="Escribe una cadena" required>
            <br>
            <br>
            <input type="text" id="palabra" name="palabra" size="50" maxlength="100" placeholder="Escribe una palabra a buscar" required>
            <br>
            <br>
            <input type="submit" value="resultado">
            <br>
            <br>
            


            <?php
            if (isset($cadena)) {

                 
                  contarPalabras($cadena,$palabra);
           
            }
                
                

                
            

           



            ?>
        </fieldset>

    </form>

</body>

</html>