<?php
include 'conection.php';
include 'dadosClasse.php';

$fkCidade = 1;
$bairro = "uvaranas";
$recepcao = "teste";

$nomeUsu = $_GET['nome'];
$cpf = $_GET['cpf'];
$nascimento = $_GET['nascimento'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$numcasa = $_GET['numcasa'];
$cidade = $_GET['cidade'];
$novologin = $_GET['novologin'];
$novasenha = $_GET['novasenha'];

dadosClasse::inserirCadastro($conexao, $fkCidade, $nomeUsu, $cpf, $nascimento, $telefone, $endereco, $numcasa, $bairro, $novologin, $novasenha, $recepcao)

?>