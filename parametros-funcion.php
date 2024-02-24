<?php
function sumar($a=5, $b=4){
    echo "La suma de estos valores es igual a: " . $a + $b ."\n";
}

$a= (int)readline("ingresa el primer valor: ");
$b= (int)readline("ingresa el segundo valor: ");

sumar($a,$b);