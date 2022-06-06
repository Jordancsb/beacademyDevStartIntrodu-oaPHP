<?php

    $bandas = [
        "Metallica",  //0
        "Red Hot Chili Peppers",   //1
        "Exalta Samba",  //2
        "Iron Maiden",  //3
    ];

    $bandas[100] = "Nirvana";
    $bandas[9] = "Calcinha Preta";

    echo "<ul>";

    foreach($bandas as $banda){
        echo "<li>{$banda}</li>";
    }

    echo "</ul>";