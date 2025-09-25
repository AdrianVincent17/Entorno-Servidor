<?php


/*Función que recibe dos parametros y te devuelve cual es mayor
Veamos que se hace uso de la palabra reservada return
*/
function mayor($num1, $num2)
{
	if ($num1>$num2){
		return $num1." es mayor que $num2";
	}
	else{
		return $num2." es mayor que $num1";
	}
}
?>

