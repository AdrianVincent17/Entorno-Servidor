<?php
/*  
 * EJERCICIO 2: Definir una variable entera y escribir por pantalla su tipo de datos.
 ! NOTA: Debemos usar alguna de las funciones vistas en el tema.
*/
$varnumero=17;
$vartexto="Esto es un ejemplo de texto";

echo "El tipo de dato de la variable es un numero: ==> $varnumero";
echo "<br>";
echo "Si es verdadero saldra un 1, si es falso no saldra un 0 ==>".is_numeric($varnumero);
echo "<br>";
echo "El tipo de dato de la variable es un texto: ==> y $vartexto";
echo "<br>";
echo "Si es verdadero (que es un numero) saldra un 1, si es falso no saldra nada ==> ".is_numeric($vartexto);
echo "<br>";
echo "Si es verdadero (que es un texto) saldra un 1, y por el contrario un 0 ==> ".is_string($vartexto);
?>