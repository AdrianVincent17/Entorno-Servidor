<?php

$dolares=5;

define("CAMBIO", 0.95);
$euros= $dolares * CAMBIO;
echo "$dolares dolares son $euros euros";

$dolares=10;
$euros= $dolares * CAMBIO;
echo "<br> $dolares dolares son $euros euros";

$euros=13.5;    
$dolares= $euros / CAMBIO;
echo "<br> $euros euros son $dolares dolares";

$euros=20;
$dolares= $euros / CAMBIO;  
echo "<br> $euros euros son $dolares dolares";

$euros=100;
$dolares= $euros / CAMBIO;
echo "<br> $euros euros son $dolares dolares";  



?>