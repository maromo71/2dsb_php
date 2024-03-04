<?php
    $sena = [0,0,0,0,0,0];
    $cont = 0;
    $tem = false;
    do{
        $tem = false;
        $gerado = rand(1, 60);
        for($i=0; $i<5; $i++){
            if($gerado == $sena[$i]){
                $tem = true;
                break;
            }
        }
        if(!$tem){
            $sena[$cont] = $gerado;
            $cont++;
        }
    }while($cont < 6);
    for($i =0; $i<6; $i++){
        echo "$sena[$i] ";
    }
    echo "\n";
    


