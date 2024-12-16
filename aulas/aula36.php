<?php

    function alteraDados($nome, $idade, $genero) {
        if($genero === "Masc") {
            $nome = "Sr. $nome";
            $idade = "$idade anos";
        } else {
            $nome = "Sra. $nome";
            $idade = "$idade anos";
        }
        return [$nome, $idade];
    }

    $dados = alteraDados("Claudia", 17, "Fem");
    print_r($dados);
    echo "Olá $dados[0], você tem $dados[1].";