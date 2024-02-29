
<?php
include "conection.php";
include 'dadosClasse.php';

$login = $_GET['login'];
$senha = $_GET['senha'];

$dadosClientes = dadosClasse::dadosUsuarios($conexao, $login, $senha);

foreach ($dadosClientes as $dadoCliente) {
    if (!empty($dadoCliente['login']) || !empty($dadoCliente['senha'])) {
        header('Location: paginaInicialFront.php?login=' . $login . '&senha=' . $senha);
    } else {
        echo "nao deu certo";
    }
}

?>