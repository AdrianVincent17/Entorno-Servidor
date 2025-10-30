<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

   

    <form action="" method="post">
         <?php

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $segundo=$_POST['segundo'];
            
            $segundo=Date("s");
            echo $segundo;
        }
    ?>



    </form>
    
</body>
</html>