<?php

function mascararCpf($cpf){

    $cpfMascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);
    return $cpfMascarado;

}

$cpf = "12345678901";
$resultado = mascararCpf($cpf);

echo "CPF: $cpf <br>";
echo "CPF mascarado: $resultado <br>";

?>
