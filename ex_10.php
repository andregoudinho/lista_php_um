<?php

function calcularMedia($notas){

    $maiorNota = max($notas);
    $menorNota = min($notas);

    $soma = 0;

    foreach($notas as $nota){
        $soma += $nota;
    }

    $media = $soma / count($notas);

    if($media >= 7){
        $resultado = "Aprovado";        
    }elseif($media >= 5){
        $resultado = "Recuperação";
    }else{
        $resultado = "Reprovado";
    }

    return "Maior Nota: $maiorNota <br>
    Menor Nota: $menorNota <br>
    Média: $media <br>
    Resultado: $resultado";
}

$notas = array(8, 7, 5, 9);

echo "Notas: " . implode(", ", $notas) . "<br>";
echo calcularMedia($notas);

?>