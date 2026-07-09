<?php

function calcularDesconto($valor, $desconto){
    if ($valor > 1000){
        $desconto = 30;
    }elseif($valor > 500){
        $desconto =20;
    }elseif($valor > 100){
        $desconto = 10;
    }else{
        $desconto = 0;
    }

    $valorDesconto = ($valor * $desconto)/ 100;
    $valorFinal = $valor - $valorDesconto;

    return "Valor original: R$ $valor <br>
    Desconto aplicado: $desconto% <br>
    Valor com desconto: R$ $valorFinal <br>";

}

$valor = 1200;

echo calcularDesconto($valor, 0);

?>
