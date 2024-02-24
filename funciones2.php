<?php

function es_estudiante_legend ($platzi_rank){
    if ($platzi_rank >=100){
        echo "Eres un estudiante Legendario! \n";
    }
    else{
        echo "Lo sentimos, aun no llegas a la clasificacion legendaria. \n";
    }

}

do {
    $platzi_rank_user= (int)readline("Por favor dinos cual es tu puntaje: ");
    es_estudiante_legend($platzi_rank_user);
} while ($platzi_rank_user < 100); {
    echo "Has llegado al final del camino!";
}

