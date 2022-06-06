<?php
    $nome = "Jordan";
    $sobrenome = "Cruz";
    $idade = 27;

    echo $idade >= 18 ? "Maior de idade" : "Menor de idade";

    echo "<br/>";

    echo isset($nome) ? $nome : "Informe seu nome";
    echo " ";

    //coalescência nula
    echo $sobrenome ?? "Informe seu sobrenome";