<?php

    $mercado = ["Bolacha", "Cookies", "Chocolate", "Gomets"];
    function itensMercado($itens) {
        $str = "Foram levados os itens: ";
        for($i = 0; $i < count($itens); $i++) {
            if($i + 1 == count($itens)) {
                $str .= "$itens[$i]. ";
            } else {
                $str .= "$itens[$i], ";
            }
        }

        return $str;
       }

    echo itensMercado($mercado);

?>