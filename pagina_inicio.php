<?php
$usuario = $_GET['tipo_usuario'];
$nome = $_GET['nome'];

?>
<!DOCTYPE html>
<html lang="en">

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
    <h1> Olá usuario
        <?php echo $usuario . ' ' . $nome; ?>
    </h1>
    <?php if ($usuario == 'master') { ?>
        <h1>Aqui você pode cadastrar novos usuários clicando no botão abaixo</h1>
        <a href="cadastros.php"><button>Cadastrar</button></a>
        <a href="relatorio_cliente.php"><button>Gerar relatório</button></a>

    <?php } else if ($usuario == 'recepcao') { ?>
            <h1>RECEPÇÃO</h1>
            <h3>Com a sua senha você pode ter acesso ao seguinte relatório:</h3>
            <a href="relatorio_cliente.php"><button>Gerar relatório</button></a>
    <?php } else { ?>
            <h1>COBRANÇA</h1>
            <h3>Com a sua senha você pode ter acesso ao seguinte relatório:</h3>
            <a href="lista.php"><button>Gerar relatório</button></a>
    <?php } ?>
</body>
<?php include 'rodape.php'; ?>

</html>