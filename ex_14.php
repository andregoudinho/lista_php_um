<?php

function estatisticasNumericas($numeros){
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);

    $quantidade = count($numeros);

    if($quantidade % 2 == 0) {
        $meio1 = $numeros[$quantidade / 2 - 1];
        $meio2 = $numeros[$quantidade / 2];
        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    $pares = 0;
    $impares = 0;

    foreach($numeros as $numero){
        if($numero % 2 == 0){
            $pares++;
        } else {
            $impares++;
        }
    }

    $resultado = "Soma: $soma";
    $resultado .= "<br>Média: $media";
    $resultado .= "<br>Maior valor: $maior";
    $resultado .= "<br>Menor valor: $menor";
    $resultado .= "<br>Mediana: $mediana";
    $resultado .= "<br>Quantidade de números pares: $pares";
    $resultado .= "<br>Quantidade de números ímpares: $impares";

    return $resultado;
    
}

$numeros = [10, 5, 8, 3, 9, 12];

echo "Números fornecidos: " . implode(", ",$numeros) . "<br><br>";
echo estatisticasNumericas($numeros);

?>