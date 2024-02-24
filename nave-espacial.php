<?php

$precios_de_cafe = [12, 56, 24, 48, 75, 55];

usort($precios_de_cafe, function($a, $b){
    return $a <=>$b;
});

var_dump($precios_de_cafe);