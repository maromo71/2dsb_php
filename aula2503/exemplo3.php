<?php
    $somatoria = 0;
    //Enquanto a soma for menor que 100
    while($somatoria < 100){
        echo "Insira um valor: \n";
        $valor = (int)readline();
        $somatoria += $valor;
    }
    echo "Soma terminou em: $somatoria \n";