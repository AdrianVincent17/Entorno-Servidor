<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if ((isset($_POST['num1']) && ($_POST['num1'])!=="") && (isset($_POST['num2']) && ($_POST['num2'])!=="")) {
        $num1=($_POST['num1']);
        $num2=($_POST['num2']);

    }

    }

   

  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>Operaciones Matematicas</legend>
        <input name="num1" id="num1" type="number" step="any" size="40" maxlength="100" placeholder="Escribe un numero" required>
        <br>
        <input name="num2" id="num2" type="number" step="any" size="40" maxlength="100" placeholder="Escribe un numero" required>
        <br>
    

        <?php

        function multinums($num1,$num2){
            return $num1*$num2;
        }

        
        function sumanums($num1,$num2){
            return $num1+$num2;
        }
        
        function restanums($num1,$num2){
            return $num1-$num2;
        }
        
        function divnums($num1,$num2){
            if($num2==0){
                return "no se puede dividir entre 0";
            }else{
                return $num1/$num2;
            }
            
        }

        if (isset($num1) && isset($num2) ){
            
            echo "<br>";
            echo "la suma de los numeros es ".sumanums($num1,$num2) ."<br>";
            echo "la multiplicacion de los numeros es ".multinums($num1,$num2) ."<br>";
            echo "la resta de los numeros es ".restanums($num1,$num2) ."<br>";
            echo "la division de los numeros es ".divnums($num1,$num2) ."<br>";
       
        }

        ?>
        
        <p><input type="submit" name="login" value="operar"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>