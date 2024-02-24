<?php

//Esta funcion retorna la hora actual.

function current_time (){
    return date('h:i A');
    
}

echo "Hola, Me podrias decir que hora es?! \n";
echo "Claro, la hora actual es " . current_time(). "\n";