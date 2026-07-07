<?php

function inverterTexto($texto){
    echo "Quantidade de caracteres: ".strlen($texto)."<br>";

    return strrev($texto);
}

$texto = "Programacao";

echo "texto invertido: ".inverterTexto($texto);

?>