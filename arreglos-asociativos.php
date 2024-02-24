<?php
// $edades = [
//     "Carlos" => 18,
//     "Mr Michi" => 20,
//     "Juan" => 40
// ];

// echo "La edad de Mr Michi es " . $edades["Mr Michi"];
// echo "\n";

// $cafes = [
//     "Capuccino" => 50,
//     "Latte"=> 49,
//     "Americano" => 70
// ];
// echo "El precio del cafe Americano es {$cafes['Americano']}";
// echo "\n";

$personas = [
    "Carlos" => [
        "edad" =>20,
        "Apellido" => "Santana"
    ],
    "Mr.Michi" =>[
        "edad"=> 18,
        "Apellido" => "Michisan"
    ]
];

echo "La informacion de Mr.Michi es apellido: {$personas['Mr.Michi']['Apellido']}, edad {$personas['Mr.Michi']['edad']}";
echo "\n";

