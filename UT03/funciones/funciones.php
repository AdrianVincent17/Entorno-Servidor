<?php

function sumar($num1,$num2){

    return $num1+$num2;

}

function restar($num1,$num2){
    return $num1-$num2;
}

function multiplicar($num1,$num2){
    return $num1*$num2;
}

function dividir($num1,$num2){
    if($num2===0){
        return "No se puede dividir entre 0";
    }else{
        return $num1/$num2;
    }
}

function GenerarMatriz($num1){
    for($i=1; $i<=$num1; $i++){
        for($j=1; $j<=$num1; $j++){
            echo aleatorio($num1);
        }
        echo "<br>";
    }
}

function aleatorio($num){
    
    return rand(1,$num);
}





?>