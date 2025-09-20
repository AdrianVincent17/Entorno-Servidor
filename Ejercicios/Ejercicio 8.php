<?php
/* EJERCICIO 8: Define dos variables con decimales y almacenarlos en dos variables
NumReal1 y NumReal2. Posteriormente hacer lo necesario para intercambiar el valor de
las dos variables y mostrar en pantalla de nuevo el valor de NumReal1 y NumReal2.*/

$NumReal1 = 5.7;
$NumReal2 = 3.4;    
echo "El valor inicial de NumReal1 es: $NumReal1 <br>";
echo "El valor inicial de NumReal2 es: $NumReal2 <br>"; 
$aux = $NumReal1;
$NumReal1 = $NumReal2;
$NumReal2 = $aux;
echo "El valor final de NumReal1 es: $NumReal1 <br>";
echo "El valor final de NumReal2 es: $NumReal2 <br>";


?>

