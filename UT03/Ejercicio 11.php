<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['altu']) && isset($_POST['altu']) && ($_POST['base'] && $_POST['base']!=="")) {
        $altu=$_POST['altu'];
        $base=$_POST['base'];
        
     

     

    }

   
}
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>area triangulo</legend>
        <input name="altu" id="altu" type="number" size="40" maxlength="100" placeholder="Introduce la altura" required>
        <br>
        <input name="base" id="base" type="number" size="40" maxlength="100" placeholder="Introduce la base" required>
        <br>

        <?php

      

        if (isset($altu) && isset($base)){
            $area=(($base*$altu)/2);
            echo("El area del triangulo es: ".$area);
        }
    
       
        

        ?>
        
        <p><input type="submit" name="login" value="Generar"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>