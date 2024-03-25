<?php
    $cont = 0; //dar dez chances
    //numero da sorte
    $numero = rand(1,1000);
    while($cont < 10){
        $cont++;
        $palpite = (int)readline("Digite um valor entre 1 e 1000:\n");

        if($numero == $palpite){
            echo "Parabéns, você acertou!\n";
            exit();
        }else{
            if($cont==10) {
                echo "O numero era $numero \n";
                exit();
            }
            echo "Infelizmente, você errou! \n";
            if($palpite < $numero){
                echo "Tente um valor maior. \n";
            }else{
                echo "Tente um valor menor. \n";
            }
        }
    }