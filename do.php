<?php
$usernames = ["Juan","Mr.Michi","Ulreck"];
do {
    $username = readline("Ingresa tu nombre de usuario: ");
    // echo "Esto se ejecuta al menos 1 vez \n";

}while (in_array($username,$usernames,TRUE));