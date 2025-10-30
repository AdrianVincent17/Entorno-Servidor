<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
     <?php

     include("funciones/funciones.php");
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

        
            
        

        if (isset($num1) && isset($num2) ){
            
            echo "<br>";
            echo "la suma de los numeros es ".sumar($num1,$num2) ."<br>";
            echo "la multiplicacion de los numeros es ".multiplicar($num1,$num2) ."<br>";
            echo "la resta de los numeros es ".restar($num1,$num2) ."<br>";
            echo "la division de los numeros es ".dividir($num1,$num2) ."<br>";
       
        }

        ?>
        
        <p><input type="submit" name="login" value="operar"></p>
        
       

    </fieldset>
  </form>


 
</body>
</html>