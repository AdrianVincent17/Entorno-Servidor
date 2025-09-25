<?php
/*
En este ejercicio copiamos la función del ejercicio 1 y además creamos una función que multiplique 3 números
y muestre el resultado por pantalla.
Utilizaremos estas dos funciones en ejercicios posteriores.
*/

//funcion que multiplica numeros
function multiplicaNumeros($num1, $num2, $num3)
{
	$resultado = $num1 * $num2 * $num3;
	print ("<h3>El resultado de multiplicar los numeros: $num1 * $num2 * $num3 es:  $resultado </h3>");
}

//funcion que suma numeros
function sumarNumeros($num1, $num2, $num3)
{
	$resultado = $num1 + $num2 + $num3;
	print ("<h3>El resultado de sumar los numeros: $num1 + $num2 + $num3 es: $resultado </h3>");
}
?>

