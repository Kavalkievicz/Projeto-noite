<?php include "header.php";
include "dadosClasse.php";
include "conection.php";

$dadosCidades = dadosClasse::dadosCidades($conexao);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<h2>Fazer cadastro:</h2>

<body>
    <form>
        <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome e sobrenome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="xxx.xxx.xxx-xx">
        </div>
        <div class="form-group">
            <label for="nascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="nascimento">
        </div>
        <div class="form-group">
            <label for="telefone">Número de telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="(xx)xxxx-xxxx">
        </div>
        <div class="form-group">
            <label for="endereço">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Ex: Rua .....">
        </div>
        <div class="form-group">
            <label for="numcasa">CPF</label>
            <input type="number" class="form-control" id="numcasa" placeholder="Ex: 00">
        </div>
        <h6>Escolher cidade</h6>
        <select name="select" id="cidade">
            <?php foreach ($dadosCidades as $dadosCidade) { ?>
                <option value="<?php echo $dadosCidade['id']; ?>"><?php echo $dadosCidade['nome_cidade']; ?></option>
            <?php } ?>
        </select>
        <div class="form-group">
            <label for="criarlogin">Criar novo login</label>
            <input type="text" class="form-control" id="novologin">
        </div>
        <div class="form-group">
            <label for="criarsenha">Criar nova senha</label>
            <input type="text" class="form-control" id="novasenha">
        </div>
        <button type="button" class="btn btn-primary" onclick="cadastrarUsuario() ">Cadastrar</button>
    </form>
</body>
<script>
    function cadastrarUsuario() {
        let nome = "";
        let cpf = 0;
        let nascimento = 0;
        let telefone = 0;
        let endereço = 0;
        let numcasa = 0;
        let cidade = 0;
        let novologin = 0;
        let novasenha = 0;

        nome = document.querySelector('#nome').value
        cpf = document.querySelector('#cpf').value;
        nascimento = document.querySelector('#nascimento').value;
        telefone = document.querySelector('#telefone').value;
        endereco = document.querySelector('#endereco').value;
        numcasa = document.querySelector('#numcasa').value;
        cidade = document.querySelector('#cidade').value;
        novologin = document.querySelector('#novologin').value;
        novasenha = document.querySelector('#novasenha').value;

        window.open(`cadastroUsuarioBack.php?nome=${nome}&cpf=${cpf}&nascimento=${nascimento}&telefone=${telefone}&endereco=${endereco}&numcasa=${numcasa}&cidade=${cidade}&novologin=${novologin}&novasenha=${novasenha}`);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>