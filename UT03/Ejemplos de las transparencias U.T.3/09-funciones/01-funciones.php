<html>
<head>
<title>Ejercicio resuelto número 1 del Tema 4</title>
<?php
/*
En este ejercicio nos vamos a crear un funcion a la que se le pasan 3 numeros, los sume 
y los muestra por pantalla.
*/

//A continucacion se declara la funcion
function sumarNumeros($num1, $num2, $num3)
{
	$resultado = $num1 + $num2 + $num3;
	print ("<h3>El resultado de sumar los numeros: $num1 + $num2 + $num3 es: $resultado </h3>");
}
?>
</head>

<body>
<?php
//A continuacion utilizamos la funcion definida anteriormente
sumarNumeros(10,16,15);
?>
</body>
</html>
