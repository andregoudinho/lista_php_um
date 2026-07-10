<?php

function formatarTexto($texto){
    
    $resultado = "Texto com letras maiúsculas: " . strtoupper($texto);
    $resultado .= "<br>Texto com letras minúsculas: " . strtolower($texto);
    $resultado .= "<br>Texto com a primeira letra de cada palavra em maiúscula: " . 
    ucwords($texto);
    $resultado .= "<br>Quantidade de caracteres: " . strlen($texto);

    return $resultado;
}

$texto = "PHP, uma Linguagem de Programação.";

echo "Texto original: $texto <br>";
echo formatarTexto($texto);



?>