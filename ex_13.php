<?php

function criptografarMensagem($texto){

    $resultado = "";

    for($i=0; $i<strlen($texto); $i++){
        $resultado .= chr(ord($texto[$i])+3);
    }

    return $resultado;
}

function descriptografarMensagem($texto){
    
    $resultado = "";

    for($i=0; $i<strlen($texto); $i++){
        $resultado .= chr(ord($texto[$i])-3);
    }

    return $resultado;
}

$mensagem = "Olá,tudo bem?";

echo "Mensagem original: ".$mensagem."<br>";

$mensagemCriptografada = criptografarMensagem($mensagem);
echo "Mensagem criptografada: ".$mensagemCriptografada."<br>";

$mensagemDescriptografada = descriptografarMensagem($mensagemCriptografada);
echo "Mensagem descriptografada: ".$mensagemDescriptografada."<br>";

?>