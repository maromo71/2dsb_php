<?php
    echo "Digite sua nota: ";
    $nota = (float) readline();
    $mensagem = "O desempenho foi ";
    if($nota <= 3.5){
        $mensagem .= "ruim (I)";
    }elseif($nota <= 6.5){
        $mensagem .= "regular (R)";
    }elseif($nota <= 8){
        $mensagem .= "bom (B)";
    }else{
        $mensagem .= "ótimo (MB)";
    }
    echo $mensagem . "\n";