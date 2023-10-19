<?php  
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		
        include('../config/conexao.php');
		
		$sql = "SELECT * FROM pessoa WHERE id = " . $id;
		
        $resultado = mysqli_query($conexao, $sql);

		
		$editar = mysqli_fetch_assoc($resultado);
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
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
            <li ><a href="listar.php">Lista</a></li>
            <li ><a href="pesquisar.php">Pesquisar</a></li>
        </ul>
    </nav>

    <header class="container">
    <div class="container-mensagens" id="container-mensagens"></div>

         <div class="title">
            <h1>Atualizar dados</h1>
        </div>
        <div class="forms">
          
            <form id="formulario" action=""  method="POST">

                <label for="nome">Nome: </label>
                <input value="<?php echo $editar['nome']; ?>"
                     type="text" 
                     id="nome" 
                     name="nome"  
                     maxlength="61"><br>

                <label for="dtNasc">Data de Nascimento: </label>
                <input value="<?php echo $editar['data_nascimento']; ?>"
                    type="date" 
                    id="dtNasc" 
                    name="dtNasc" 
                    min="0001-01-01"
                    max="9999-12-31"><br>

                <label for="tel">Telefone: </label>
                <input value="<?php echo $editar['telefone']; ?>"
                    type="text"
                     id="telefone"
                     name="telefone" 
                     maxlength="15"
                     oninput="aplicarMascara(this)"><br>
                     
                <label for="genero">Gênero:</label>

                <input type="radio" name="genero" value="Masculino" <?php if ($editar['genero'] == 'Masculino') echo 'checked'; ?>>
                <p class="genero">Masculino</p>

                <input type="radio" name="genero" value="Feminino" <?php if ($editar['genero'] == 'Feminino') echo 'checked'; ?>>
                <p class="genero">Feminino</p>

                <input type="radio" name="genero" value="Outro" <?php if ($editar['genero'] == 'Outro') echo 'checked'; ?>>
                <p class="genero">Outro</p><br><br>

                <label for="email">Email:</label>
                <input value="<?php echo $editar['email']; ?>"
                    type="email" 
                    name="email" 
                    id="email" 
                    required 
                    maxlength="51"><br>
                
                <label for="profissao">Profissão:</label>
                <input value="<?php echo $editar['profissao']; ?>"
                    type="text" 
                    name="profissao"
                    id="profissao"
                    maxlength="30" required ><br><br>

                <input type="hidden" name="id" value="<?php echo $editar['id']; ?>">

                <div class="botao">
                    <button id="botaoEnviar"  name="botaoEnviar" type="submit">Atualizar</button>
                    <button id="reset"  name="reset" type="reset">Limpar</button>
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
    <?php
	if(isset($_POST['botaoEnviar']))
	{
        include('../config/conexao.php');
        $nome = $_POST['nome'];
        $dtNasc = $_POST['dtNasc'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $email = $_POST['email'];
        $profissao = $_POST['profissao'];
		
        $sql = "UPDATE pessoa SET nome = '{$nome}', data_nascimento = '{$dtNasc}', telefone = '{$telefone}',
         genero = '{$genero}', email = '{$email}', profissao = '{$profissao}' WHERE id = {$id}";		
        $resultado = mysqli_query($conexao, $sql);


		if ($resultado) {
            echo '<script>window.location.href = "listar.php";</script>';
        } else {
            echo '<script>alert("Erro: " + mysqli_error($conexao));</script>';
        }
	}
	?>

</body>
</html>