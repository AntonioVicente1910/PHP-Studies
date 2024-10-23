<?php
    function compararNumeros($n1, $n2) {
        if ($n1 == $n2){
            echo "$n1 e $n2 são iguais";
        } elseif ($n1 > $n2) {
            echo "$n1 é maior que $n2";
        } elseif ($n2 > $n1) {
            echo "$n2 é maior que $n1";
        }
    
    }
    $n1 = 112;
    $n2 = 224;
    
    compararNumeros($n1, $n2);