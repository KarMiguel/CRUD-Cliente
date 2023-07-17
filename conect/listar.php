<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de  Cliente</title>
    <link rel="stylesheet" href="../css/style.css">
    <link
        rel="shortcut icon"
        href="../img/logo-menu.png"
        type="image/vnd.microsoft.icon"
  />
  <script src="js/form.js" defer></script>
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
            <h1>Lista de clientes</h1>	
        </div>
    <?php
        include('../config/conexao.php');
        $sql = "SELECT * FROM pessoa";
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado->num_rows) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
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
            echo "<td><a class='dados' href='Visualizar.php?id={$id}'>Visualizar</a></td>";
            echo "<td><a class='atualizar' href='atualizar.php?id={$id}'>Atualizar</a></td>";
            echo "<td><a class='remove' href='remover.php?id={$id}'>Remover</a></td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<script>alert('Não há nenhum aluno registrado!');</script>";
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