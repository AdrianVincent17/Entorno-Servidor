<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1=(float) $_POST['num1'];
        $num2=(float) $_POST['num2'];
        $aux=$num1;
        $num1=$num2;
        $num2=$aux;
       }else
        $sum="Introduce solo numeros";
    }
   
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>Operaciones</legend>
        
        <input name="num1" id="num1" type="number" size="40" maxlength="100" placeholder="numero 1" required>
        <br>
        <input name="num2" id="num2" type="number" size="40" maxlength="100" placeholder="numero 2" required>
        <br>
        <br>
    

        <?php

        if (isset($num1) && isset($num2)){
        echo "El valor 1 es: $num1 .<br>";
        echo "El valor 2 es: $num2 .<br>";
        }

        ?>
        
        <p><input type="submit" name="login" value="intercambiar valores"></p>
        
       

    </fieldset>
  </form>


 
</body>
</html>