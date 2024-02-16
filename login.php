<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include 'cabecalho.php';
?>

<body>
    <input type="text" placeholder="login" id="usuario">
    <input type="passoword" placeholder="senha" id="senha">
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