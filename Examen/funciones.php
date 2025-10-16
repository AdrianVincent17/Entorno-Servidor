<?php

function sumar($num1, $num2)
{
    return $num1 + $num2;
}

function restar($num1, $num2)
{
    return $num1 - $num2;
}

function multiplicar($num1, $num2)
{
    return $num1 * $num2;
}

function dividir($num1, $num2)
{

    if ($num2 == 0) {
        return "Error, no se puede dividir entre 0";
    } else {
        return $num1 / $num2;
    }
}

function contarPalabras($cadena, $palabra)
{


    $cadena = strtolower($cadena);
    $palabra = strtolower($palabra);

    $cadena = trim($cadena);
    $palabra = trim($palabra);

 
    $conta = substr_count($cadena, $palabra);

    echo "La cadena elegida es: $cadena  <br> ";
    echo "La palabra  $palabra se repite $conta veces";
 
}
   
