<?php
$gato_escuela = [
    "pelusa"=>[
        "ocupacion"=>"Maximun Miauwster",
        "color"=>"azul",
        "comida"=>[
            "favorita"=>"Pescado",
            "odiada"=>"comida seca"

        ]
    ],
    "bigotes"=>[
        "ocupacion"=>"Gerente Gatuno",
        "color"=>"Verde",
        "comida"=>[
            "favorita"=>"Pastel",
            "odiada"=>"Lasagna"

        ]
    ],
    "orion"=>[
        "ocupacion"=>"Ronroneador Sr",
        "color"=>"lila",
        "comida"=>[
            "favorita"=>"atun",
            "odiada"=>"galleta soda"

        ]
    ]

];

echo "Mi gato Pelusa es el {$gato_escuela['pelusa']['ocupacion']} de la empresa, su comida favorita es {$gato_escuela['pelusa']['comida']['favorita']} pero odia la {$gato_escuela['pelusa']['comida']['odiada']}\n";
echo "Mi gato Orion es el  {$gato_escuela['orion']['ocupacion']} de la empresa, su comida favorita es {$gato_escuela['orion']['comida']['favorita']} pero odia la {$gato_escuela['orion']['comida']['odiada']} \n";

echo "Mi gato Bigotes es el {$gato_escuela['bigotes']['ocupacion']} de la empresa, su comida favorita es {$gato_escuela['bigotes']['comida']['favorita']} pero odia la {$gato_escuela['bigotes']['comida']['odiada']}\n";