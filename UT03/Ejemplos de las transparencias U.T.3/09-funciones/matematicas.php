<?php

//Funcion que suma 3 números pasados por parametro
function sumar($num1, $num2, $num3)
{
	$resultado = $num1 + $num2 + $num3;
	print ("<h3>El resultado de sumar los numeros: $num1 + $num2 + $num3 es: $resultado </h3>");
}

//Funcion que hace la resta de 2 números pasados por parametro
function restar($num1, $num2)
{
	$resultado = $num1 - $num2;
	print ("<h3>El resultado de restar los numeros: $num1 - $num2 es: $resultado </h3>");
}

?>