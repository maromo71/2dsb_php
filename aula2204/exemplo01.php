<?php
    $meses = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
    ];
    echo $meses[5] . "\n";
    foreach ($meses as $num => $mes) {
        echo "Mes " . $num . " = " . $mes . "\n";
    }

    $dicionario = [
        "hello" => "ola",
        "world" => "mundo",
        "yelow" => "amarelo",
        "red" => "vermelho",
        "blue" => "azul"
    ];
    echo $dicionario["blue"] . "\n";
    foreach ($dicionario as $ingles => $portugues) {
        echo "Palavra: " . $ingles . " = " . $portugues . "\n";
    }