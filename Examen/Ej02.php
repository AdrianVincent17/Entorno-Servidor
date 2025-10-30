<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
           
            $num=$_POST['num'];
            $operacion=$_POST['operacion'];


        }

    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Conversor de monedas</legend>
            <br>
            <label for="num">Ingresa euros o dolares</label>
            <input type="number"id="num" name="num" step="any" min="1" placeholder="euro o dolar" required>
            <br>
            <label for="operacion">1-Convierte a Euros  2- Convierte a Dolares</label>
            <input type="number" id="operacion" name="operacion" min="1" max="2" placeholder="conversor" required>
            <br>
            <br>
            <input type="submit" value="calcular">
            <br>
            <br>


         <?php
            if(isset($operacion)){
                if($operacion==1){
                    echo $num*0.90 ." Euros";
                }
                if($operacion==2){
                    echo $num*1.10 ." Dolares";
                }
            }


        

    ?>



        </fieldset>


        
    </form>
    
</body>
</html>