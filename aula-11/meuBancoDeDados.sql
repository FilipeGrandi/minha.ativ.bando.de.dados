-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/04/2024 às 17:46
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_aula`
--

CREATE DATABASE IF NOT EXISTS `banco_aula` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `banco_aula`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `recurso_acessado` varchar(255) NOT NULL,
  `acessado_em` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Registra os recursos acessados pelo usuário';

-- --------------------------------------------------------

--
-- Estrutura para tabela `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nome_menu` varchar(255) NOT NULL,
  `link_menu` varchar(255) NOT NULL,
  `status_menu` tinyint(1) DEFAULT NULL COMMENT 'Valor booleano (true or false)',
  `nivel_de_permissao_menu` int(11) DEFAULT NULL COMMENT 'Permissão varia de 1 a 10 com valores inteiros'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Tabela para cadastro dos menus e suas permisões';

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

