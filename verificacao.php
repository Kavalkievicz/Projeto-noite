<?php include 'conexao_aula.php'; ?>

<?php
function cadastro($conexao, $login, $senha)
{
    $dados = "SELECT tipo_usuario, nome_usuario FROM tb_usuarios WHERE login = '$login' AND senha = '$senha'";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}

$login = $_GET["login"];
$senha = $_GET["senha"];

$cadastro_usuario = cadastro($conexao, $login, $senha);

foreach ($cadastro_usuario as $usuario) {
    $tipoUsuario = $usuario['tipo_usuario'];
    $nome_usuario = $usuario['nome_usuario'];
    echo $nome_usuario;

    if ($tipoUsuario) {
        header('Location: pagina_inicio.php?tipo_usuario=' . $tipoUsuario . '&nome=' . $nome_usuario);
    } else {
        echo 'nome e senha incorretos!!';
    }
}
?>