<?php include 'conexao_aula.php'; ?>

<?php
function relatorioCliente($conexao)
{
    $dados = "SELECT * FROM tb_usuarios";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    return $sql_conexao;
}

$dadosCliente = relatorioCliente($conexao);

function cidades($conexao, $id_cidade)
{
    $dados = "SELECT nome_cidade FROM tb_cidades WHERE id = '$id_cidade'";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    return $sql_conexao;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php include 'cabecalho.php'; ?>
<?php include 'menu.php'; ?>

<body>
    <table class="table table-success table-striped border-default">
        <thead>
            <td>id</td>
            <td>nome_usuario</td>
            <td>cpf</td>
            <td>data_nascimento</td>
            <td>telefone</td>
            <td>endereço</td>
            <td>num_casa</td>
            <td>bairro</td>
            <td>fk_id_cidades</td>
            <td>ativo</td>
            <td>created_at</td>
            <td>disable_at</td>
            <td>tipo_usuario</td>
            <td>login</td>
            <td>senha</td>
            <td>ação</td>
        </thead>
        <tbody>
            <?php foreach ($dadosCliente as $usuarios) { ?>
                <tr class="main" id="teste" data-usuario="<?php echo $usuarios['id']; ?>">
                    <td>
                        <?php echo $usuarios['id']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['nome_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['cpf']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['data_nascimento']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['telefone']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['endereço']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['num_casa']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['bairro']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['fk_id_cidades']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['ativo']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['created_at']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['disable_at']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['tipo_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['login']; ?>
                    </td>
                    <td>
                        <?php echo $usuarios['senha']; ?>
                    </td>
                    <td>
                        <button class="desativar" onclick="desativar()" type="button">Desativar</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php include 'rodape.php'; ?>
</body>

</html>
<script>

    function desativar() {

        let usuario = document.querySelector('.main').getAttribute('data-usuario');
        window.open(`desabilitar.php?botao=${usuario}`);
    }

</script>