<?php
  require_once('../config/conexao.php');

  $id = isset($_GET['id']) ? $_GET['id'] : null;
  $editar = null;

  if ($id) {
    $sql = "SELECT * FROM pessoa WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
    $editar = mysqli_fetch_assoc($resultado);
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=,initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Visualizar Dados Clientes</title>
  <link rel="shortcut icon" href="../img/logo-menu.png" type="image/vnd.microsoft.icon">
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
    <div class="title">
      <h1>VISUALIZAR DADOS CLIENTE</h1>
    </div>
    <div class="visualizar">
  <?php if ($editar) : ?>
    <div class="visualizar-item">
      <h3><strong>Nome:</strong></h3>
      <p><?php echo $editar['nome']; ?></p>
    </div>

    <div class="visualizar-item">
      <h3><strong>Data de Nascimento:</strong></h3>
      <p><?php echo $editar['data_nascimento']; ?></p>
    </div>

    <div class="visualizar-item">
      <h3><strong>Telefone:</strong></h3>
      <p><?php echo $editar['telefone']; ?></p>
    </div>

    <div class="visualizar-item">
      <h3><strong>Gênero:</strong></h3>
      <p><?php echo $editar['genero']; ?></p>
    </div>

    <div class="visualizar-item">
      <h3><strong>E-mail:</strong></h3>
      <p><?php echo $editar['email']; ?></p>
    </div>

    <div class="visualizar-item">
      <h3><strong>Profissão:</strong></h3>
      <p><?php echo $editar['profissao']; ?></p>
    </div>
  <?php else : ?>
    <p>Nenhum dado encontrado.</p>
  <?php endif; ?>
</div>

  </header>

  <footer class="tfooter">
    <div class="rodape">
      <h2>COMPUTER</h2><br>
      <span>TAGLINE HERE</span>
    </div>
  </footer>
</body>
</html>
