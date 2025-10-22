 
 <?php

 if($_SERVER['REQUEST_METHOD']==="POST"){

 
 
 include("conexion.php");
 
 $cod=$_POST['codigo'];
 $det=$_POST['detalle'];
 $pro=$_POST['producto'];
 $pre=$_POST['precio'];
 $des=$_POST['descuento'];
 $imag=$_POST['imagen'];

 $consulta="UPDATE productos SET producto='$pro', descuento='$des', detalle='$det', precio='$pre' WHERE codigo='$cod'";

 mysqli_query($conn,$consulta);

 echo mysqli_error($conn);

 mysqli_close($conn);

 header("LOCATION:listado.php");
 }else{
    header("LOCATION:menu.php");
 }
 ?>