<?php

    $arquivo = fopen("file.csv", "a+");


    fwrite($arquivo, "Jordan" . PHP_EOL);
    fwrite($arquivo, "Cruz" . PHP_EOL);


    fclose($arquivo);