<?php
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    echo "Números pares do 0 até o 20 <br>";
    for ($i = 0; $i < count($num); $i++) {
        if($num[$i] % 2 == 0){
            echo "N°: $num[$i] <br>";
        };
    }