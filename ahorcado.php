<?php
function clear (){
    if (PHP_OS === "WINNT"){
        system("cls");
    }
    else {
        system("clear");
    }
};

$possible_words = ["Platano","Cafe","Rompecabezas","Dragon","Ventana","Guitarra","Conejo","Tomate","Portatil","Selva","Cohete","Billetera","Futbol","Burbuja","Castillo","Martillo","Almohada","Circo","Cactus","Bosque",];

define("MAX_ATTEMPTS",5);
echo "Juego del Ahorcado!! \n \n";
//Inicializando Juego:

$choosen_words = $possible_words[rand(0,count($possible_words)-1)];
$choosen_words = strtolower($choosen_words);
$word_length = strlen($choosen_words);
$discovered_letters = str_pad("*",$word_length, "*");
$attemtps = 0;

do {

    echo "Adivina una palabra de $word_length letras \n";
    echo "$discovered_letters \n \n";
    //Solicitando Input de usuario:

    $player_letter = readline("Elige una letra: ");
    $player_letter = strtolower($player_letter) ;

    if (str_contains($choosen_words, $player_letter)){
        //Verificando las ocurrencias de las letras
        $offset =0;
        while (
            ($letter_position = strpos($choosen_words, $player_letter, $offset))
            !== false
        ) {
            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position+1;
        }
    }
    else{
        clear();
        $attemtps++;
        echo "Letra incorrecta!! Te quedan ". (MAX_ATTEMPTS - $attemtps) . " Intentos \n";
        sleep(2);
    }
    clear();
} while($attemtps < MAX_ATTEMPTS && $discovered_letters != $choosen_words);
clear();
if ($attemtps< MAX_ATTEMPTS) {
    echo "Felicidades!! Has advidinado la palabra! \n";
}else {
    echo "Mejor Suerte para la Pocima ;) !! La palabra correcta era $choosen_words! \n";
    echo "Lograste adivinar estas letras: $discovered_letters \n";
}


echo "\n";
