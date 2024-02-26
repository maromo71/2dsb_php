<?php
    $num = 500;
    function escopo(){
        global $num;
        $num += 5;
        echo "$num \n";
    }
    echo " $num \n "; 
    escopo();