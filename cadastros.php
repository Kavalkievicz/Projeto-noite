<?php include 'conexao_aula.php'; ?>
<?php
function cadastro($conexao)
{
    $dados = "SELECT * FROM tb_cidades";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}

$cidades = cadastro($conexao);
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
    <input type="text" placeholder="Nome do usuario" id="nome_usuario">
    <input type="number" placeholder="CPF" id="cpf">
    <input type="date" placeholder="Data de nascimento" id="data_nascimento">
    <input type="number" placeholder="Telefone" id="telefone">
    <input type="text" placeholder="Endereço" id="endereco">
    <input type="number" placeholder="Numero da casa" id="num_casa">
    <input type="text" placeholder="Bairro" id="bairro">
    <select name="fk_id_tb_cidades" id="fk_id_tb_cidades">
        <option value="-1">Selecione a cidade</option>
        <?php foreach ($cidades as $cidade) { ?>
            <option value="<?php echo $cidade['id']; ?>">
                <?php echo $cidade['nome_cidade']; ?>
            </option>
        <?php } ?>
    </select>
    <input type="text" placeholder="Tipo do usuario" id="tipo_usuario">
    <input type="text" placeholder="Login" id="login">
    <input type="passoword" placeholder="Senha" id="senha">
    <button onclick="cadastrar()" type="submit">Entrar</button>
</body>
<?php
include 'rodape.php';
?>

</html>
<script>
    function cadastrar() {
        let nome_usuario = document.getElementById('nome_usuario').value;
        let cpf = document.getElementById('cpf').value;
        let data_nascimento = document.getElementById('data_nascimento').value;
        let telefone = document.getElementById('telefone').value;
        let endereco = document.getElementById('endereco').value;
        let num_casa = document.getElementById('num_casa').value;
        let bairro = document.getElementById('bairro').value;
        let fk_id_tb_cidades = document.getElementById('fk_id_tb_cidades').value;
        let tipo_usuario = document.getElementById('tipo_usuario').value;
        let login = document.getElementById('login').value;
        let senha = document.getElementById('senha').value;

        window.open(`back_cadastros.php?nome_usuario=${nome_usuario}&&cpf=${cpf}&&data_nascimento=${data_nascimento}
        &&telefone=${telefone}&&endereco=${endereco}&&num_casa=${num_casa}&&bairro=${bairro}&&fk_id_tb_cidades=${fk_id_tb_cidades}
        &&tipo_usuario=${tipo_usuario}&&login=${login}&&senha=${senha}`);

    }
</script>