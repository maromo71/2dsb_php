<?php
    require_once "calculadora.php";

    $num1 = 10;
    $num2 = 3;

    $somar = somar($num1, $num2);
    $subtrair = subtrair($num1, $num2);

    echo "A soma: " . $somar . "<br>";
    echo "A subtração: " . $subtrair . "<br>";