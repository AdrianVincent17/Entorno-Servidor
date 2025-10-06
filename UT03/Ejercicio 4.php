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
        <input name="listado" id="listado" type="text" step="any" size="40" maxlength="100" placeholder="(Separalos por un espacio)" required>
        <br>
        <br>
    

        <?php

      

        if (isset($listado)){
                    $array=[];
                foreach($listado as $valor){
                if (is_numeric($valor)){
                    $array[]=$valor;
                }
                }
             if (count($array)!=7){
                echo "Debes introducir 7 numeros <br>";
            }else{
                foreach($array as $indice => $valor){
                echo "El numero ".($indice+1)." es --->$valor <br>";
                }
            
            }
           
        }
    

        ?>
        
        <p><input type="submit" name="login" value="Mostrar"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>