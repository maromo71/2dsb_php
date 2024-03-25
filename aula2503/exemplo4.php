<?php
    $somatoria = 0;
    $valor = 0;
    //Enquanto a soma for menor ou igual a 100
    while($somatoria <= 100){
        //Enquanto o valor for menor que 0 ou maior que 20
        do{
            $valor = (int)readline("Digite um valor: ");
        }while($valor <0 || $valor > 20);
        $somatoria += $valor;
    }
    echo "Soma = $somatoria \n";