-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/10/2023 às 04:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `genero` enum('Masculino','Feminino','Outro') NOT NULL,
  `email` varchar(50) NOT NULL,
  `profissao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `data_nascimento`, `telefone`, `genero`, `email`, `profissao`) VALUES
(2, 'Carlos Miguel dos Santos  ', '2003-10-06', '(38) 99999-9999', 'Masculino', 'carlosmiguel.dsa12@gmail.com', 'Programdor'),
(3, 'Maria de Jesus Ribeiro', '1976-12-29', '(61) 99554-6588', 'Feminino', 'mariadejesus.santana.@hotmail.com', 'professora'),
(8, 'Eraldo Carlos Alves de Souza', '1976-06-03', '(88) 99934-1895', 'Masculino', 'eraldocas@gmail.com', 'Produtor Rural'),
(11, 'Maria Luiza dos Santos ', '2006-08-06', '(38) 98545-9875', 'Feminino', 'maria@gmail.com', 'Telefonista'),
(41, 'Zezim Almeida Silva', '1999-05-05', '845454656', 'Masculino', 'zezim@gmail.com', 'fsdfsd');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
