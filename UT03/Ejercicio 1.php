<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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
        $sum= $num1+$num2;
        $res=$num1-$num2;
        $mul=$num1*$num2;
        $divi=$num1/$num2;
        $sum="La suma de los números introducidos es --> $sum";
        $res="La resta de los números introducidos es --> $res";
        $mul="La multiplicacion de los números introducidos es --> $mul";
        $divi="La division de los números introducidos es --> $divi";
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

        if (isset($sum) && isset($res) && isset($mul) && isset($divi)){
        echo "$sum .<br>";
        echo "$res .<br>";
        echo "$mul .<br>";
        echo "$divi .<br>";
        }

        ?>
        
        <p><input type="submit" name="login" value="calcular"></p>
        
       

    </fieldset>
  </form>


 
</body>
</html>