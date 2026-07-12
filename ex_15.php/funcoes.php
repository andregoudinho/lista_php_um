<?php

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerarSenha(){
    return "Abc12345";
}

function contarVogais($texto){
    return preg_match_all("/[aeiouAEIOU]/", $texto);
}

function inverterTexto($texto){
    return strrev($texto);
}

function calcularIdade($anoNascimento){
    return date("Y") - $anoNascimento;
}

function converterMoeda($valor){
    return $valor * 5.50;
}

function formatarTelefone($telefone){
    return "(" . substr($telefone,0,2) . ") " . substr($telefone,2,5) . "-" . substr($telefone,7);
}

function saudacao(){

    $hora = date("H");
    
    if(date("H") < 12){
        return "Bom dia!";
    }elseif(date("H") < 18){
        return "Boa tarde!";
    }else{
        return "Boa noite!";
    }
}

function validarSenha($senha){
    if(strlen($senha) >= 8){
        return "Senha forte";
    }else{
        return "Senha fraca";
    }
}

?>