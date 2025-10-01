<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['altu']) && ($_POST['altu'])!=="") {
        $altu=$_POST['altu'];
        
     

     

    }

   
}
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>triangulo</legend>
        <input name="altu" id="altu" type="number" size="40" maxlength="100" placeholder="Introduce la altura" required>
        <br>
        <br>

        <?php

      

        if (isset($altu)){
            for($i=0; $i<=$altu; $i++){
                for($z=0; $z<$i; $z++){
                    echo "*";
                }
                echo "<br>";
            }
        }
    
       
        

        ?>
        
        <p><input type="submit" name="login" value="Generar"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>