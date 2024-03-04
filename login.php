<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
include 'cabecalho.php';
?>

<body>
    <input type="text" placeholder="login" id="usuario">
    <input type="password" placeholder="senha" id="senha">
    <button onclick="entrar()" type="submit">Entrar</button>
</body>
<?php
include 'rodape.php';
?>

</html>
<script>
    function entrar() {
        let login = document.getElementById('usuario').value;
        let senha = document.getElementById('senha').value;

        window.open(`verificacao.php?login=${login}&&senha=${senha}`);

    }
</script>