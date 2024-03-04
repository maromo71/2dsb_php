<?php
    $nota = [
        6, 10, 6.5, 9.5, 10
    ];
    $soma = 0;
    for($i = 0; $i < 5; $i++){
        $soma +=  $nota[$i]; 
    }
    $media = $soma / 5.0;
    echo "Media da sala: $media \n";

