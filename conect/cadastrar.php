
<?php        

$nome = "";
$dtNasc = "";
$telefone ="";
$genero = "";
$email ="";
$profissao = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('../config/conexao.php');
    $nome = $_POST['nome'];
    $dtNasc = $_POST['dtNasc'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];



    $sql = "INSERT INTO pessoa (nome, data_nascimento, telefone, genero, email, profissao) 
            VALUES ('$nome', '$dtNasc', '$telefone', '$genero', '$email', '$profissao')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo '<script>window.location.href = "listar.php"</script>';
    } else { 
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>