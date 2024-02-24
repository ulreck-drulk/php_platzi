<?php
$current_donation_ammount = readline("Por favor ingresa tu Monto de Donaciones actual: ");

if ($current_donation_ammount>=100){
    echo "Puedes retirar tus donaciones! \n";
}
else{
    echo "Debes tener un minimo de $ 100 para Retirar \n";
    echo "Cuentas con $ {$current_donation_ammount} \n";
    echo ("Aun hace falta $ " .  100 - $current_donation_ammount) ." para completar el monto \n";
}
