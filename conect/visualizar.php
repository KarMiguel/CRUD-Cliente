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
          <strong>Nome:</strong>
          <?php echo $editar['nome']; ?>
        </div>

        <div class="visualizar-item">
          <strong>Data de Nascimento:</strong>
          <?php echo $editar['data_nascimento']; ?>
        </div>

        <div class="visualizar-item">
          <strong>Telefone:</strong>
          <?php echo $editar['telefone']; ?>
        </div>

        <div class="visualizar-item">
          <strong>Gênero:</strong>
          <?php echo $editar['genero']; ?>
        </div>

        <div class="visualizar-item">
          <strong>E-mail:</strong>
          <?php echo $editar['email']; ?>
        </div>

        <div class="visualizar-item">
          <strong>Profissão:</strong>
          <?php echo $editar['profissao']; ?>
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
