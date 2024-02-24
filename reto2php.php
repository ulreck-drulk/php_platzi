<?php

/*
Esta es la respuesta al reto 2 del curso de PHP en platzi
Tiendas: existen un total de 9 tiendas, cada tiene al menos 1 forma de llegar
Los problemas en programacion se resuelven en su mayoria pensando con logica
Al analizar el problema comprendemos que hay un patron entre cada una de las rutas

Tienda 2 =>  1 Camino
Tienda 3 =>  2 caminos
Tienda 4 =>  3 caminos
Tienda 5 =>  5 caminos
Tienda 6 =>  8 caminos
Tienda 7 =>  13 caminos
Tienda 8 =>  21 caminos
Tienda 9 =>  ?

Primero olvidemos la proyeccion grafica y pensemos en algo logico, si analizas los datos veremos que cada 
camino nuevo es el resultado de sumar los 2 caminos anteriores.
*/

// Primero seleccionamos la tienda, dejamos al usuario elegir cual tienda quiere evaluar
$numero_de_tienda = readline("Selecciona la tienda que quieras analizar: "); 
$anterior = 0; 
$actual = 1;
// Los valores de las variables $actual y $anterior son estatico porque la iteracion inicia en la 
// primera tienda con al menos 1 ruta disponible, la tienda numero 2.

for ($i=2; $i <=$numero_de_tienda; $i++) { 
        $temporal = $actual;   // La variable temporal almacena el valor actual (el que se convierte en el anterior)
        $actual += $anterior;  // Con el patron encontrado podemos decir que el valor equivale a la suma del anterior+actual
        $anterior = $temporal; // La variable temporal se actualiza con el valor del anterior
        
}
echo "Existen $actual caminos para llegar al destino Seleccionado \n";