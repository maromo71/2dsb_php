<?php
    $bingo = [
        [0,0,0,0,0],
        [0,0,0,0,0],
        [0,0,0,0,0],
        [0,0,0,0,0],
        [0,0,0,0,0]
    ];

    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            switch($j){
                case 0: 
                    $bingo[$i][$j] = rand(1,15);
                    break;
                case 1:
                    $bingo[$i][$j] = rand(16,30);
                    break;
                case 2:
                    $bingo[$i][$j] = rand(31,45);
                    break;
                case 3:
                    $bingo[$i][$j] = rand(46,60);
                    break;
                case 4:
                    $bingo[$i][$j] = rand(61,75);
                    break;
            }
            
        }
    }
    $bingo[2][2] = -1;
    //imprimir o bingo
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            echo $bingo[$i][$j] . " ";
        }
        echo "\n";

    }

   
