<?php
include 'conection.php';
include 'dadosClasse.php';

function relatorioUsuarios($conexao)
{
    $dados = "SELECT tb_usuarios.*, tb_cidades.nome_cidade FROM tb_usuarios INNER JOIN tb_cidades ON tb_cidades.id = tb_usuarios.fk_id_tb_cidades";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}
$dadosClientes = relatorioUsuarios($conexao);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <td>Nome</td>
            <td>CPF</td>
            <td>Nascimento</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Numero da casa</td>
            <td>Bairro</td>
            <td>Cidade</td>
        </thead>

        <tbody>
            <?php foreach ($dadosClientes as $dadoCliente) { ?>
                <tr>
                    <td><?php echo $dadoCliente['nome_usuario']; ?></td>
                    <td><?php echo $dadoCliente['cpf']; ?></td>
                    <td><?php echo $dadoCliente['data_nascimento']; ?></td>
                    <td><?php echo $dadoCliente['telefone']; ?></td>
                    <td><?php echo $dadoCliente['endereco']; ?></td>
                    <td><?php echo $dadoCliente['num_casa']; ?></td>
                    <td><?php echo $dadoCliente['bairro']; ?></td>
                    <td><?php echo $dadoCliente['nome_cidade']; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>