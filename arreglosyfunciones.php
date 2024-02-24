<?php

function sumar($a, $b){
    echo "La suma de $a y $b es igual a: " . $a + $b ."\n";
}
$numeros = [125,4842];
sumar(...$numeros);

