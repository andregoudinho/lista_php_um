<?php

include "funcoes.php";

$peso = 70;
$altura = 1.75;

echo "Peso: $peso <br>";
echo "Altura: $altura <br>";
echo "IMC: " . calcularIMC($peso, $altura);
echo "<br><br>";

$email = "andre@gmail.com";

echo "E-mail: $email <br>";
echo "Validação: " . validarEmail($email);
echo "<br><br>";

echo "Senha gerada: " . gerarSenha();
echo "<br><br>";

$texto = "Programacao";

echo "Texto: $texto <br>";
echo "Quantidade de vogais: " . contarVogais($texto);
echo "<br><br>";

$texto = "Linguagem em PHP";

echo "Texto original: $texto <br>";
echo "Texto invertido: " . inverterTexto($texto);
echo "<br><br>";

$anoNascimento = 2007;

echo "Ano de nascimento: $anoNascimento <br>";
echo "Idade: " . calcularIdade($anoNascimento);
echo "<br><br>";

$valor = 100;

echo "Valor em dólar: $valor <br>";
echo "Valor em reais: R$ " . converterMoeda($valor);
echo "<br><br>";

$telefone = "47997616623";

echo "Telefone: $telefone <br>";
echo "Telefone formatado: " . formatarTelefone($telefone);
echo "<br><br>";

date_default_timezone_set("America/Sao_Paulo");
echo saudacao();
echo "<br><br>";

$senha = "Andre123##";

echo "Senha: $senha <br>";
echo "Resultado: " . validarSenha($senha);

?>