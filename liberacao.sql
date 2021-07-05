-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2021 às 15:43
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `endianfirewall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `liberacao`
--

CREATE TABLE `liberacao` (
  `idSolicitacao` int(11) NOT NULL,
  `dataSolicitacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `emailSolicitacao` varchar(200) NOT NULL,
  `urlSolicitacao` varchar(1000) NOT NULL,
  `nomeSolicitacao` varchar(100) NOT NULL,
  `ipSolicitacao` varchar(15) NOT NULL,
  `statusSolicitacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `liberacao`
--
ALTER TABLE `liberacao`
  ADD PRIMARY KEY (`idSolicitacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `liberacao`
--
ALTER TABLE `liberacao`
  MODIFY `idSolicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
