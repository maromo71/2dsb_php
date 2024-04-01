<?php
$tabuleiro = [];
function gerarValores(){
    global $tabuleiro;
    for($i = 0; $i<10; $i++){
        for($j =0; $j<10; $j++){
            $tabuleiro[$i][$j] = rand(1,100);
        }
    }
}
function contarAcertos($p1, $p2){
    global $tabuleiro;
    $cont = 0;
    for($i =0; $i<10; $i++){
        for($j =0; $j<10; $j++){
            if($tabuleiro[$i][$j] == $p1 || $tabuleiro[$i][$j] == $p2){
                $cont++;
            }
        }
    }
    return $cont;
}
function mostrarTabuleiro($p1, $p2){
    global $tabuleiro;
    //imprimir todo o tabuleiro na tela
    for($i = 0; $i<10; $i++){
        for($j =0; $j<10; $j++){
            if($tabuleiro[$i][$j]==$p1 || $tabuleiro[$i][$j]==$p2){
                printf("[%3d]*", $tabuleiro[$i][$j]);
            }else{
                printf("[%3d] ", $tabuleiro[$i][$j]);
            }
           
        }
        echo "\n";
    }
}
gerarValores();

echo "Digite o palpite 1:, valores de 1 a 100\n";
$palpite1 = (int)readline();
echo "Digite o palpite 2:, valores de 1 a 100\n";
$palpite2 = (int)readline();

$total = contarAcertos($palpite1, $palpite2);

echo "Total de acertos: $total \n";
$premio = 0;
if($total >= 2){
    $premio = 1000.0 * $total;
    echo "Parabéns seu prêmio é:  R$ " . $total . "\n";
}
mostrarTabuleiro($palpite1, $palpite2);
