<?php
    echo "Digite M para masculino ou F para feminino: ";
    $sexo = readline();
    echo "Digite o valor do salario: ";
    $salario = (float) readline();
    switch($sexo){
        case "M":
        case "m":
            $salario *= 1.10;
            break;
        case "F":
        case "f":
            $salario *= 1.11;
            break;
    }
    echo "Seu novo salario e: " . $salario;