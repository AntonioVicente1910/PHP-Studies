<?php
    $a = 10;

    while($a <= 100) {

        if($a == 30 || $a == 40){
            $a = $a + 10;
            continue;

        }
        echo "$a<br>";

        $a = $a + 10;
    }