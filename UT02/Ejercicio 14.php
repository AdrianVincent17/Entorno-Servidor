<?php
// Ejercicio 14: Crear un array asociativo que contenga los nombres de los días de la semana como claves y sus abreviaturas como valores. Mostrar el array completo y luego cada día con su abreviatura en una línea separada.
$diasSemana = array(
    "Lunes" => "Lun",
    "Martes" => "Mar",
    "Miércoles" => "Mié",
    "Jueves" => "Jue",
    "Viernes" => "Vie",
    "Sábado" => "Sáb",
    "Domingo" => "Dom"
);
// Mostrar el array completo
print_r($diasSemana);
echo "\n";  
// Mostrar cada día con su abreviatura en una línea separada
foreach ($diasSemana as $dia => $abreviatura) {
    echo "$dia: $abreviatura\n";
}   
?>