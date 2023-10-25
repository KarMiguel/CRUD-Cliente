<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Pesquisar Clientes</title>
  <link rel="shortcut icon" href="../img/logo-menu.png" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
  <nav class="nav-bar">
    <div class="logo">
      <img src="../img/logo-menu.png" alt="">
    </div>
    <ul class="menu">
    <li ><a href="cadastrarPessoas.php">Cadastrar</a></li>
        <li ><a href="listar.php">Lista </a></li>
        <li ><a href="pesquisar.php">Pesquisar</a></li>
        <li id="sair"><a  href="sair.php">Sair</a></li>

    </ul>
  </nav>

  <header class="container">
    <div class="title">
      <h1>PESQUISAR CLIENTE</h1>
    </div>

    <div class="forms">
        <form method="POST" action="">
            <div class="barra-pesquisar">
            <input id="pesquisar" type="text" name="nomePesquisar" placeholder="Digite o nome do cliente que deseja pesquisar...">
            <button id="pesquisar" name="pesquisar" type="submit">Pesquisar</button>
            </div>
        </form>
    </div>

    <?php

include('../config/conexao.php');

session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');
}
$logado = $_SESSION['email'];

    if (isset($_POST['pesquisar'])) {
        $nome = $_POST["nomePesquisar"];

        $sql = "SELECT * FROM pessoa WHERE nome = '$nome'";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            if ($resultado->num_rows) {
                echo "<div class='table-container'>"; 
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>E-mail</th>";
                echo "<th>Telefone</th>";
                echo "<th>Visualizar</th>";
                echo "<th>Atualizar</th>";
                echo "<th>Remover</th>";
                echo "</tr>";
                
                while ($values = mysqli_fetch_assoc($resultado)) {
                    $id = $values['id'];            
                    echo "<tr>";
                    echo "<td>" . $values['id'] . "</td>";
                    echo "<td>" . $values['nome'] . "</td>";
                    echo "<td>" . $values['email'] . "</td>";
                    echo "<td>" . $values['telefone'] . "</td>";
                    echo "<td><a class='dados' href='visualizar.php?id={$id}'><i class='fas fa-eye'></i></a></td>";
                    echo "<td><a class='atualizar' href='atualizar.php?id={$id}'><i class='fas fa-edit'></i></a></td>";
                    echo '<td><a class="remove" href="javascript:void(0)" onclick="confirmarApagar(' . $id . ')"><i class="fa-solid fa-trash"></i></a></td>';
                    
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
             }
                
        } else {
            echo " Cliente nao encontrado!";
        }
    }

    ?>

  </header>
  <footer class="tfooter">
    <div class="rodape">
      <h2>COMPUTER</h2><br>
      <span>TAGLINE HERE</span>
    </div>
  </footer>
</body>
</html>
