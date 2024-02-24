<?php

function suma_infinita(...$parametros){
    $suma =0;
    foreach($parametros as $numero){
        $suma+=$numero;
    }
    echo "La suma de estos valores es igual a: $suma \n";
}

suma_infinita(1,2,4);
suma_infinita(1,4,5,95,2);
suma_infinita(1,2,7,54,1);
suma_infinita(1,2,54,48,3);
