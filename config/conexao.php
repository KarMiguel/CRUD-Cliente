<?php

$servidor = "localhost";
$base_dados = "cadastro";
$nome_usuario = "root";
$senha = "";

$conexao =  mysqli_connect($servidor,$nome_usuario,$senha,$base_dados);

if(mysqli_connect_errno()){
	echo "Falha na conexão com a base de dados: " . mysqli_connect_error();
}

?>