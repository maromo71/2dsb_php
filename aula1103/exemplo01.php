<?php
    $sena = [];
    $cont = 0;
    do{
        $tem = false;
        //gerar o valor
        $valor = rand(1,60);
        for($i=0; $i<$cont; $i++){
            if($valor == $sena[$i]){ //confirmando se ja tem ele
                $tem = true;
                break;
            }
        }
        if(!$tem) {
            $sena[$cont] = $valor;
            $cont++;
        }
    }while($cont < 6);
    sort($sena);
    print_r($sena);