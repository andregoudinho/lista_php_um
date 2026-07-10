<?php

function analisarProdutos ($produtos, $pesquisa){

    $maiorPreco = max($produtos);
    $menorPreco = min($produtos);
    $mediaPreco = array_sum($produtos) / count($produtos);

    $produtoMaisCaro = array_search($maiorPreco, $produtos);
    $produtoMaisBarato = array_search($menorPreco, $produtos);

    $resultado = "<br>Produto mais caro: R$ " . $maiorPreco;
    $resultado .= "<br>Produto mais barato: R$ " . $menorPreco;
    $resultado .= "<br>Média de preço dos produtos: R$ " . $mediaPreco;

    if(array_key_exists($pesquisa, $produtos)){
        $resultado .= "<br>Produto informado pelo usuário: R$ " . $produtos[$pesquisa];
    }else{
        $resultado .= "<br>Produto informado pelo usuário não encontrado";
    }
        
    return $resultado;
}

$produtos = [
    "Café" => 24.00,
    "Chá" => 13.00,
    "Açúcar" => 8.25,
    "Sal" => 4.75,
];

$pesquisa = "Café";

echo "Produtos disponíveis: <br>";
foreach ($produtos as $nome => $preco) {
    echo "$nome: R$ $preco <br>";
}
echo "<br>Produto informado pelo usuário: $pesquisa <br>";
echo analisarProdutos($produtos, $pesquisa);

?>