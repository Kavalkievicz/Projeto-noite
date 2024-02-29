<?php include 'conexao_aula.php'; ?>

<?php
function cadastro($conexao, $id)
{
    $dados = "UPDATE tb_usuarios SET ativo = '0' WHERE id = '$id'";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}

$id = 4;

cadastro($conexao, $id);

echo "deu certo!"
?>
