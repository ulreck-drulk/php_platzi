<?php

function get_pokemon(){
    $numero_aleatorio= rand(1,5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Bulbasur\n";
            break;
        case 2:
            echo "Charmander\n";
            break;
        case 3:
            echo "Squirtle\n";
            break;

        default:
            echo "Pokemon ID not Found \n";
            break;
    }
}

get_pokemon();
echo "\n";
