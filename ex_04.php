<?php

function gerarSenha($quantidade) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $senha = '';

    for($i=0; $i< $quantidade; $i++) {
        $posicao = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$posicao];
    }

    return $senha;

}

$quantidade = 10;

echo "Quantidade de caracteres: $quantidade <br>";
echo "Senha gerada: " . gerarSenha($quantidade);

?>