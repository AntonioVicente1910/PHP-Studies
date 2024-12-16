<?php
    $arr = [
        "Camisa - Iron Maden" => 120,
        "Camisa - Metallica" => 130,
        "Camisa - Aviões do Forró" => 100,
        "Bermuda Jeans - c/Bolso" => 80,
        "Bermuda Jeans - s/Bolso" => 60
    ];

    function lojaRoupas($arr){
        
        $arrCaros = [];

            foreach($arr as $item => $preco) {
                if($preco > 100) {

                    array_push($arrCaros, $item);

                }
            }
            return $arrCaros;
        }
        
    
    $novoArr = lojaRoupas($arr);
    var_dump($novoArr);