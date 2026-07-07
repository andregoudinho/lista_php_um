<?php

function inverterTexto($texto){
    $textoInvertido = strrev($texto);
    return $textoInvertido;

}

$texto = "Programacao";
$resultado = inverterTexto($texto);

echo "Texto original: $texto <br>";
echo "Quantidade de caracteres: ". strlen($texto ). "<br>";
echo "Texto invertido: $resultado <br>";

?>