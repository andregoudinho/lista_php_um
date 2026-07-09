<?php

function analisarNumeros($numero){

    if($numero % 2 == 0){
        $parImpar = "par";
    } else {
        $parImpar = "ímpar";
    }

    $primo = "Primo";

    if($numero < 2){
        $primo = "Não é primo";
    }else{
        for($i = 2; $i <= sqrt($numero); $i++){
            if($numero % $i == 0){
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for($i = 1; $i < $numero; $i++){
        if($numero % $i == 0){
            $soma += $i;
        }
    }

    if($soma == $numero){
        $perfeito = "É perfeito esse número";
    }else{
        $perfeito = "Não é perfeito esse número";
    }

    return "Número: $numero <br>
    Par ou ímpar: $parImpar <br>
    Primo ou não: $primo <br>
    Perfeito ou não: $perfeito";
}

$numero = 31;

echo analisarNumeros($numero);

?>