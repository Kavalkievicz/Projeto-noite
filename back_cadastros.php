<?php include 'conexao_aula.php'; ?>

<?php
function cadastro($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha)
{
    $dados = "INSERT INTO tb_usuarios (nome_usuario,cpf,data_nascimento,telefone,endereço,num_casa,bairro,fk_id_cidades,ativo,tipo_usuario,login,senha)
    VALUES ('$nome_usuario', '$cpf','$data_nascimento','$telefone','$endereco', '$num_casa', '$bairro', '$fk_id_cidades', '1', '$tipo_usuario','$login','$senha' )";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}



$nome_usuario = $_GET["nome_usuario"];
$cpf = $_GET["cpf"];
$data_nascimento = $_GET["data_nascimento"];
$telefone = $_GET["telefone"];
$endereco = $_GET["endereco"];
$num_casa = $_GET["num_casa"];
$bairro = $_GET["bairro"];
$fk_id_cidades = $_GET["fk_id_tb_cidades"];
$tipo_usuario = $_GET["tipo_usuario"];
$login = $_GET["login"];
$senha = $_GET["senha"];

echo $nome_usuario . '<br>' . $cpf . '<br>' . $data_nascimento . '<br>' . $telefone . '<br>' . $endereco . '<br>' . $num_casa . '<br>' . $bairro
    . '<br>' . $fk_id_tb_cidades . '<br>' . $tipo_usuario . '<br>' . $login . '<br>' . $senha;

cadastro($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha);








?>