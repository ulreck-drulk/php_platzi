<?php
// $ages = [18,24,40,35];

// //count 
// echo count($ages);
// echo "\n";

// //array_push
// array_push($ages, 16);

// var_dump($ages);
// echo "\n";

// //is_array

// $no_es_un_arreglo = "";
// var_dump(is_array($no_es_un_arreglo));
// echo "\n";

//explode
// $lista_de_frutas= "fresa, cereza, manzana";
// $array_lista_de_frutas = explode(",",$lista_de_frutas);

// var_dump($array_lista_de_frutas);
// echo "\n";

//implode
$array_lista_de_frutas= ["fresa", "cereza", "manzana"];
$lista_de_frutas = implode(",",$array_lista_de_frutas);

var_dump($lista_de_frutas);
echo "\n";

