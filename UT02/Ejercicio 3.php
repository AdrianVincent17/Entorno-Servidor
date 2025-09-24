<?php
/*
* EJERCICIO 3: En este ejercicio debes utilizar comentarios, variables y operadores.
Declarar 6 variables:
* 2 cadenas de texto → cadena1 y cadena2
* 2 números enteros → numeroEntero1 y numeroEntero2
* 2 números decimales → numeroDecimal1 y numeroDecimal2 
*/


/*
*Declaracion de variables tipo String
*/

$cadena1="Hola, Bienvenido ";
$cadena2="Juan Perez";

/*
*Declaracion de variables tipo Integer
*/  
$num1=21;
$num2=17;

/*
*Declaracion de variables tipo Double
*/

$dec1=3.5;
$dec2=7.8;

/*
*mostramos por pantalla la cadena 1 y la cadena 2 
*/

echo "La cadena 1 es: $cadena1";
echo "<br>";    
echo "La cadena 2 es: $cadena2";    
echo "<br>";

/*
* Ahora mostraremos por pantalla el resultado de las siguientes operaciones:
* Concatenar las dos cadenas de texto y mostrar el resultado por <pantalla
 */
echo "Esto es una concatenacion de un saludo de bienvenido de un alumno: $cadena1 $cadena2"."<br">;

/*
*Estas cadenas tambien se pueden poner fuera de las comillas y funcionan igual siempre y cuando se les ponga
*un punto entre ellas, como se muestra a continuacion:
*/

echo "Esto es una concatenacion de un saludo de bienvenido de un alumno: ".$cadena1.$cadena2;

/* 
*Ahora mostramos la concatenacion de los dos numeros enteros  
*/

echo "<br>";
echo "La concatenacion de los dos numeros enteros es: ".$num1.$num2;
/* 
*Ahora mostramos la suma de los dos numeros enteros  
*/

echo "<br>";    
echo "La suma de los dos numeros enteros es: ".($num1+$num2);
/* 
*Ahora mostramos la resta de los dos numeros enteros  
*/

echo "<br>";
echo "La resta de el numero decimal 2 y el numero entero 1 es: ".($dec2-$num1);  
/* 
*Ahora mostramos la multiplicacion de un numero entero y uno decimal  
*/

echo "<br>";
echo "La multiplicacion de un numero decimal 1 y uno entero 2  es: ".($dec1*$num2);

?>