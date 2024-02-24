<?php
function freddy (){
    $numero_aleatorio = rand(1,5);
    $frase_de_freddy = "";
    switch ($numero_aleatorio) {
        case 1:
            $frase_de_freddy= "Nunca pares de aprender \n";
            break;
        
        case 2:
            $frase_de_freddy="Las empresas NO SON FAMILIA \n";
            break;

        case 3:
            $frase_de_freddy= "Nunca pares de aprender\n";
            break;
            default:
            $frase_de_freddy= "There are no more phrases! \n";
            break;
    }
    return $frase_de_freddy;
}
echo freddy();
echo "\n";