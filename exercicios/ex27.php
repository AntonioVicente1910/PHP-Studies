<?php
    $a = ["A", "a", "B", "b", 10, 20, 30, 40, 50];
    $b = count($a);
    $c = 0;
    while($c < $b) {
        if (is_integer($a[$c])) {
            echo $a[$c] . "<br>";
        }
        $c++;
    }   