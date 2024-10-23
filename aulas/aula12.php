<?php
    if (5 > 2 || 3 < 4) {
        echo "A operação 1 é verdadeira <br>";
    }

    if (1 > 2 || 5 < 4) {
        echo "A operação 1 é verdadeira <br>";
    } else {
        echo "A operação 2 é falsa <br>";
    }

    $a = 20;
    $b = 30;
    $c = 40;
    $d = 50;

    if (($b > $a || $d < $c) && $c < $d) {
        echo "A operação 3 é verdadeira <br>";
    }
