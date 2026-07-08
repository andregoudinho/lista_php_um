<?php

function converterTemperatura($valor, $origem, $destino){
    if ($origem == "C" && $destino == "F"){
        $resultado = ($valor * 9/5) + 32;
    }

    elseif ($origem == "C" && $destino == "K"){
        $resultado = $valor + 273.15;
    }

    elseif ($origem == "F" && $destino == "C"){
        $resultado = ($valor -32) * 5/9;
    }

    elseif ($origem == "F" && $destino == "K"){
        $resultado = (($valor - 32) * 5/9);
    }

    elseif ($origem == "K" && $destino == "C"){
        $resultado = $valor - 273.15;
    }

    elseif ($origem == "K" && $destino == "F"){
        $resultado = (($valor - 273.15) * 9/5) + 32; 
    }

    elseif ($origem == $destino){
        $resultado = $valor;
    }

    else{
        return "Escala inválida.";
    }

    return $resultado;
}

$valor = 30;
$origem = "C";
$destino = "F";

$resultado = converterTemperatura($valor, $origem, $destino);

echo "Valor: $valor °$origem <br>";
echo "Converter para: °$destino <br>";
echo "Resultado: $resultado °$destino"; 

?>
