<?php include "header.php"; ?>

<?php 
include 'conection.php';
include 'dadosClasse.php';

function relatorioUsuarios($conexao)
{
    $dados = "SELECT tipo_usuario, nome_usuario FROM tb_usuarios WHERE login = 'amanda' AND senha = 'endo'";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}
$dadosClientes = relatorioUsuarios($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
<h2> Bem vindo <span id="nome"></span> </h2>

</header>

<body>
    
</body>
</html>



<?php ?>