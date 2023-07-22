<?php
	
	$id = $_GET['id'];

	if(isset($_GET['opcao']))
	{		
        include('../config/conexao.php');
		
		$sql = "DELETE FROM pessoa WHERE id = {$id}";
		
		$resultado = mysqli_query($conexao, $sql);
		
		if($resultado)
		{
            echo '<script>alert("Cliente removido com sucesso!");</script>';
		}
		else
		{
			$msg = mysqli_error($conexao);
		}
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Remover Cliente</title>
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
        <ul class= "menu">      
            <li ><a href="index.php">Cadastrar</a></li>
            <li ><a href="listar.php">Lista</a></li>
            <li ><a href="pesquisar.php">Pesquisar</a></li>
        </ul>
    </nav>
    
    <header class="container">
        <div class="title">
            <h1>Deseja Remover Cliente?</h1>
        </div>
        <script>
   function confirmarApagar() {
    if (window.confirm("Deseja apagar este cliente?")) {
        window.location.href = "remover.php?id=<?php echo $id; ?>&opcao=sim";
    } else {
      window.location.href = "listar.php";
    }
  }
  </script>
    <div class="btn-remove">
        <button id="btnApagar" onclick="confirmarApagar()">Sim</button>
        <button id="voltar"><a href="listar.php">Não</a></button>
    </div>
</p>

</header>
    <footer class="tfooter">
        <div class="rodape"> 
            <h2>COMPUTER</h2><br>
            <span>TAGLINE HERE</span>
        </div>
    </footer>
</body>
</html>
