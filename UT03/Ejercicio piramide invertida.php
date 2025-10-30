<!DOCTYPE html>
<html lang="ess">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio prueba</title>
</head>

<body>

    <?php

    include("funciones/funciones.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $num1 = $_POST['num1'];
    }

    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Soy peruano</legend>

            <input type="number" name="num1" id="num1" min="1" max="15" step="any" placeholder="Dame algo padre" required>


            <input type="submit">

            <br>
            <br>

            <?php

            if (isset($num1)) {

              

        for ($i = $num1; $i >= 1; $i--) {
            // Espacios
            for ($j = $i; $j < $num1; $j++) {
                echo "&nbsp";
            }

            // Asteriscos
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo "*";
            }

            echo "<br>";
        }
            }

            ?>

        </fieldset>

    </form>
</body>

</html>