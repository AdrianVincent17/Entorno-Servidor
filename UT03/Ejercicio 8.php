<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
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
        <legend>Par o Impar</legend>
        <input name="num" id="num" type="number" size="40" maxlength="100" placeholder="Introduce un numero" required>
        <br>
        <br>

        <?php

      

        if (isset($num)){
        if($num%2==0){
            for($ini=0; $ini<10; $ini++){
                $num=$num+2;
                echo($num." ");
            }

        }else{
                for($ini=0; $ini<10; $ini++){
                $num=$num+2;
                echo($num." ");
            }
        }
        }
    
       
        

        ?>
        
        <p><input type="submit" name="login" value="Par o Impar"></p>
        
       

    </fieldset>
  </form>
  <script>

 
</body>
</html>