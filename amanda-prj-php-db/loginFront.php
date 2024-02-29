<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" placeholder="Seu login">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="**********">
        </div>
        <button type="button" class="btn btn-primary" onclick="fazerLogin() ">Entrar</button>
    </form>
</body>
<script>
    function fazerLogin() {
        let login = 0;
        let senha = 0;
        login = document.querySelector('#login').value
        senha = document.querySelector('#senha').value;


        if (login != 0 && senha != 0) {
            window.open(`loginBack.php?login=${login}&senha=${senha}`);
        } else {
            alert("Preencha o login e a senha!");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>