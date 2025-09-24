<?php
/*
* EJERCICIO 9: Crea una variable con el precio de un producto y un porcentaje de
* descuento, luego calcula y muestra el precio con y sin descuento.
*/

$precioproducto = 120.50;
$descuento = 15; // porcentaje de descuento 
$preciocondescuento = $precioproducto - (($precioproducto * $descuento) / 100);
echo "El precio sin descuento es: $precioproducto <br>";  
echo "El porcentaje de descuento es: $descuento% <br>";  
echo "El precio con descuento es: $preciocondescuento <br>";

?>