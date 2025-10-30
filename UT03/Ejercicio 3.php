<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
     <?php
    /*
    *procesamos si se ha enviado el formulario 
    */

    if ($_SERVER['REQUEST_METHOD']==='POST'){
       if (isset($_POST['dia']) && ($_POST['dia'])!=="") {
        $dia=$_POST['dia'];
        $dia=strtoupper($dia);


        switch($dia){
        case "L": $dia="Lunes (laboral)";break;
        case "M": $dia="Martes (laboral)";break;
        case "X": $dia="Miercoles (laboral)";break;
        case "J": $dia="Jueves (laboral)";break;
        case "V": $dia="Viernes (laboral)";break;
        case "S": $dia="Sabado (fin de semana)";break;
        case "D": $dia="Domingo (fin de semana)";break;
        default: $dia="No es un dia de la semana";
    }

    }

   
}
  ?>
   <form action="" method="POST">
    <fieldset>
        <legend>Operaciones</legend>
        <label>Introduce un dia de la semana</label>
        <input name="dia" id="dia" type="text" size="40" maxlength="100" placeholder="(L,M,X,J,V,S,D)" required>
        <br>
    

        <?php

      

        if (isset($dia)){
        echo "$dia <br>";
        }

        ?>
        
        <p><input type="submit" name="login" value="semana"></p>
        
       

    </fieldset>
  </form>


 
</body>
</html>