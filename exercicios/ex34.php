<?php

    function num($n) {
        if($n % 2 === 0){
            echo "$n é par <br>";
        } else {
            echo "$n é impar <br>";
        };
    };

num(4);
num(3);