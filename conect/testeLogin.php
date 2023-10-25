<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        include('../config/conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM login  WHERE usuario = '$email' and senha = '$senha'";
        $result = mysqli_query($conexao, $sql);


        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location:../index.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location:./listar.php');


        }

    }

?>