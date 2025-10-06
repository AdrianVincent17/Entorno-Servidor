<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['num']) && ($_POST['num']!=="")) {
        $num=$_POST['num'];
        
    }

   
}
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>tabla multiplicar</legend>
        <input name="num" id="num" type="number" size="100" maxlength="100" placeholder="Introduce la tabla de multiplicar" required>
        <br>
       

        <?php

      

        if (isset($num)){

            $archivo=fopen("tabla del $num.txt", "w");
            fputs ($archivo, "La tabla del $num es: ".PHP_EOL);
            echo "<h3>La tabla del $num</h3>";
           for($i=1; $i<=10; $i++){
            $result=$num*$i;
            fputs ($archivo,"$num x $i = $result".PHP_EOL);
            echo "$num x $i = $result <br>";
           }
           fclose ($archivo);
        }
    
       
        

        ?>
        
        <p><input type="submit" name="login" value="Generar">  <input type="reset" name="num" id="num" value="Borrar"></p>
        
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>