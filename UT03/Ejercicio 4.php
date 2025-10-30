<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['listado']) && ($_POST['listado'])!=="") {
        $listado=$_POST['listado'];
        $listado=explode(",",$listado);

    }

    }

   

  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>Lista de numeros</legend>
        <label>Introduce 7 numeros</label>
        <input name="listado" id="listado" type="text" size="40" maxlength="100" placeholder="(Separalos por una coma)" required>
        <br>
        <br>
    

        <?php

      

        if (isset($listado)){
             if (count($listado)<7 || !is_numeric($listado)){
                echo "Debes introducir 7 numeros <br>";
            }else{
                foreach($listado as $indice => $valor){
                echo "El numero ".($indice+1)." es --->$valor <br>";
                }
            }
           
        }
    

        ?>
        
        <p><input type="submit" name="login" value="Mostrar"></p>
        
       

    </fieldset>
  </form>


 
</body>
</html>