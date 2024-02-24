<?php
 $tiendita_de_cafe = [
    "Americano"=> 15,
    "Expresso"=> 27.5,
    "Capuchino"=> 23,
    "Recalentado" => 10,
    "Latte"=> 20,
    "Mocachino"=> 31 ];

 /*Este es un ejemplo de foreach usando un if para mostrar el uso de BREAK*/
//  foreach ($tiendita_de_cafe as $cafe => $price) {
//     echo "El cafe actual es un $cafe \n";
//     if($cafe =="Latte"){
//         echo "Encontramos el Latte \n";
//         break;
//     }
//  }

 /*Este es un ejemplo de foreach usando un if para mostrar el uso de Continue*/

 foreach ($tiendita_de_cafe as $cafe => $price) {
        if($cafe=="Recalentado"){   
            // echo "El cafe $cafe es muy rico \n";
            continue;
        }
        echo "El cafe $cafe esta feo! \n";
     }