<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
        rel="shortcut icon"
        href="./img/logo-menu.png"
        type="image/vnd.microsoft.icon"
  />
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="tela-login">
    <form action="./conect/testeLogin.php" method="post" class="login">

        <h3> Faça Login</h3>

        <input type="text" name="email" id="login" required placeholder="Usuario: admin"><br><br>
        <input type="password" name="senha" id="senhaLogin" placeholder="Senha: admin"><br> <br>

        <input class="btn-login" type="submit" name="submit" value="Enviar">
           

    </form>
    </div>

</body>
</html>