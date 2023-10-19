
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../css/style.css">
    <link
        rel="shortcut icon"
        href="../img/logo-menu.png"
        type="image/vnd.microsoft.icon"
  />

</head>
<body>
    <nav class="nav-bar">
        <div class="logo">
            <img src="../img/logo-menu.png" alt="">
        </div>
        <ul class="menu">
            <li ><a href="index.php">Cadastrar</a></li>
            <li ><a href="listar.php">Lista </a></li>
            <li ><a href="pesquisar.php">Pesquisar</a></li>
        </ul>
    </nav>

    <header class="container">
         <div class="title">
            <h1>Faça seu Cadastro</h1>
        </div>
        <div class="forms">
          
            <form  action="./cadastrar.php" method="POST"  >

                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" required maxlength="60" placeholder="Nome completo"><br>

                <label for="dtNasc">Data de Nascimento: </label>
                <input type="date" id="dtNasc" name="dtNasc" min="0001-01-01" max="9999-12-31" required><br>

                <label for="tel">Telefone: </label>
                <input type="text" id="telefone" name="telefone" required maxlength="15" placeholder="(99) 99999-9999" oninput="aplicarMascara(this)">

                <label for="genero">Genêro:</label>
                    <input type="radio" name="genero" value="Masculino" required>
                    <p class="genero">Masculino</p>
                
                    <input type="radio" name="genero" value="Feminino"required>
                    <p class="genero">Feminino</p>

                    <input type="radio" name="genero" value="Outro"required>
                    <p class="genero">Outro</p><br> <br> 

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="exemplo@gmail.com" maxlength="50"><br>
                
               <label for="profissao">Profissão:</label>
               <input type="text" name="profissao"id="profissao" maxlength="30" required placeholder="Ex: Programador"><br><br>

                <div class="botao">
                    <button id="botaoEnviar" name="btnCadastrar" id="btnCadastrar" type="submit">Enviar</button>
                    <button id="reset" name="reset" type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </header>
    
    <footer class="tfooter">
        <div class="rodape"> 
            <h2>COMPUTER</h2><br>
            <span>TAGLINE HERE</span>
        </div>
    </footer>
    <script src="../js/form.js" ></script>


   
</body>
</html>