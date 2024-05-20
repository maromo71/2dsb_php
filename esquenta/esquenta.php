<?php
    $nums = [];

    function montarVetor(){
        global $nums;
        for ($i=0; $i < 10; $i++) { 
            $nums[$i] = (int) readline("Digite valor: ");
        }
        echo "Dez valores cadastrados \n";
    }

    function mostrarMaior(){
        global $nums;
        $maior = $nums[0];
        for ($i=1; $i < 10; $i++) { 
            if ($nums[$i] > $maior) {
                $maior = $nums[$i];
            }
        }
        return $maior;
    }

    function mostrarVetor(){
        global $nums;
        for ($i=0; $i < 10; $i++) { 
            echo $nums[$i] . "\n";
        }
    }

    function mostrarElementosDistintos(){
        global $nums;
        $elementosDistintos = [];
        for ($i=0; $i < 10; $i++) { 
            if (!in_array($nums[$i], $elementosDistintos)) {
                $elementosDistintos[] = $nums[$i];
            }
        }
        echo "Elementos distintos: \n";
        for ($i=0; $i < count($elementosDistintos); $i++) {
            echo $elementosDistintos[$i] . "\n";
        }
    }
    montarVetor();
    $maior = mostrarMaior();
    mostrarVetor();
    echo "Maior valor: " . $maior . "\n";

    mostrarElementosDistintos();
    