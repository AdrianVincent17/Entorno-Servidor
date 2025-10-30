<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <?php
    include("funciones.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
    }
    ?>

    <form action="" method="post">
        <fieldset>

            <legend>Calculadora</legend>
            <br>
            <label for="num1">Numero 1</label>
            <input type="number" name="num1" id="num1" step="any" placeholder="Num 1" required>
            <br>
            <label for="num2">Numero 2</label>
            <input type="number" name="num2" id="num2" step="any" placeholder="Num 2" required>
            <br>
            <label for="operacion">1-Suma 2-Resta 3-Multiplica 4-Divide</label>
            <input type="number" name="operacion" id="operacion" min="1" max="4" placeholder="Operacion" required>
            <br>
            <br>
            <input type="submit" value="calcular">
            <br>
            <br>

            
         <?php
            if (isset($num1)) {

                if ($operacion == 1) {
                    echo sumar($num1, $num2);
                }
                if ($operacion == 2) {
                    echo restar($num1, $num2);
                }
                if ($operacion == 3) {
                    echo multiplicar($num1, $num2);
                }
                if ($operacion == 4) {
                    echo dividir($num1, $num2);
                }
            }
            ?>
        </fieldset>

    </form>




</body>

</html>