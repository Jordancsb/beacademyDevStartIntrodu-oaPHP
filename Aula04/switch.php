<?php

$data = new DateTime();
$mes = $data->format('m');

switch($mes){
    case "01":
        echo "Janeiro";
        break;
    case "02":
        echo "Fevereiro";
        break;
    case "04":
        echo "Abril";
        break;
    case "05":
        echo "Maio";
        break;
    case "06":
        echo "Junho";
        break;
    case "07":
        echo "Julho";
        break;
    case "08":
        echo "Agosto";
        break;
    case "10":
        echo "Outubro";
        break;
    case "11":
        echo "Novembro";
        break;
    default:
        echo "Mês não declarado";
        break;
}
