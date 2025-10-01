<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['num']) && ($_POST['num'])!=="") {
        $num=$_POST['num'];
        
     

     

    }

   
}
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>Matriz</legend>
        <input name="num" id="num" type="number" size="40" maxlength="100" placeholder="Introduce un numero" required>
        <br>
        <br>

        <?php

      

        if (isset($num)){
        for($ini=0; $ini<$num; $ini++){
            for($ini2=0; $ini2<$num; $ini2++){
             echo("*");
        }
        echo("<br>");
    }
       
        }

        ?>
        
        <p><input type="submit" name="login" value="Generar Matriz"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>