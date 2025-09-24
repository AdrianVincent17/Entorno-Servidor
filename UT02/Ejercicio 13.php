<?php

$dolares=5;
$euros=5;
define("TASA", 1.18 ); // 1 euro = 1.18 dolares
define("TASA2", 0.85 ); // 1 dolar = 0.85 euros
$cambio1=$euros * TASA;
$cambio2=$dolares * TASA;
echo "$euros a fecha de 22/09/2025 son: $cambio1 dolares <br>";
echo "$dolares a fecha de 22/09/2025 son: $cambio2 euros <br>";




?>