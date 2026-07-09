<?php

function ordenarNomes($nomes){
    $vetor = explode(",", $nomes);

    foreach($vetor as &$nome){
        $nome = trim($nome);
    }

    sort($vetor);

    return implode(",",$vetor);
    
}

$nomes = "André, Kaio, Henrique, Brayan, Nínive, Maria, Sophia";

echo "Nomes desordenados: " . $nomes . "<br>";
echo "Nomes ordenados: " . ordenarNomes($nomes) . "<br>";

?>