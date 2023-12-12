-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Abr-2023 às 12:09
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xonline_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `resid` varchar(200) NOT NULL,
  `nacionalidade` varchar(40) NOT NULL,
  `naturalidade` varchar(40) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `nascimento` varchar(40) NOT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `curso` varchar(40) NOT NULL,
  `classe` varchar(4) NOT NULL,
  `turno` varchar(6) NOT NULL,
  `sala` int(11) NOT NULL,
  `emite` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `resid`, `nacionalidade`, `naturalidade`, `provincia`, `nascimento`, `genero`, `curso`, `classe`, `turno`, `sala`, `emite`, `usuario`) VALUES
(1, 'Ander inkana', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-09', 'masculino', 'informatica', '10', 'Manhã', 10, '2023-02-09 12:45:06', 0),
(2, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(3, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(4, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(5, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(6, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(7, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(8, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(9, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(10, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(11, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(12, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(13, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(14, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(15, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(16, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(17, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(18, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(19, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:00', 0),
(20, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:01', 0),
(21, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:01', 0),
(22, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(23, 'Wendy Miguel Diana', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-15', 'feminino', 'medicina', '12', 'Manhã', 8, '2023-02-09 16:57:02', 0),
(24, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(25, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(26, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(27, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(28, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(29, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(30, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(31, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(32, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(33, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:02', 0),
(34, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(35, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(36, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(37, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(38, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(39, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(40, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(41, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:03', 0),
(42, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(43, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(44, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(45, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(46, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(47, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(48, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(49, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:08', 0),
(52, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(53, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(54, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(55, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(56, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(57, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(58, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(59, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(60, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(61, '', '', '', '', '', '', '', '', '', '', 0, '2023-02-09 16:57:09', 0),
(63, 'Lander Enedem Rinkana', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-09', 'masculino', 'medicina', '10', 'Manhã', 10, '2023-02-09 17:57:21', 0),
(64, 'Lander Enedem Rinkana', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-09', 'masculino', 'informatica', '10', 'Manhã', 12, '2023-02-09 18:46:07', 0),
(65, 'Ander inkana', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-09', 'masculino', 'informatica', '11', 'Manhã', 10, '2023-02-17 09:14:43', 0),
(66, 'Xavier Moisés Alberto José', 'Banda dos Gofl2', 'Angolana', 'Luanda', 'Luanda', '2023-02-26', 'masculino', '', '', '', 0, '2023-02-26 19:20:48', 8),
(67, 'Xander Nander', 'Golf2', 'Angolana ', 'Luanda ', 'Luanda ', '2023-03-03', 'masculino', '', '', '', 0, '2023-03-03 06:38:34', 10),
(68, 'Xander Nander2', 'Golf2', 'Angolana', 'Luanda ', 'Luanda ', '2023-03-17', 'masculino', '', '', '', 0, '2023-03-09 13:15:52', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursar`
--

CREATE TABLE `cursar` (
  `id` int(11) NOT NULL,
  `conta` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `pacote` varchar(40) NOT NULL,
  `pedido` int(11) NOT NULL DEFAULT 1,
  `dm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursar`
--

INSERT INTO `cursar` (`id`, `conta`, `aluno`, `curso`, `pacote`, `pedido`, `dm`) VALUES
(2, 10, 67, 'sharp', 'wpf', 1, '2023-03-03 07:22:19'),
(4, 10, 67, 'sharp', 'win-from', 1, '2023-03-03 07:57:04'),
(5, 10, 67, 'cfb', '', 1, '2023-03-03 08:12:03'),
(8, 10, 67, 'fl-studio', '', 1, '2023-03-03 08:15:25'),
(9, 10, 67, 'informatica', '', 1, '2023-03-03 08:15:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobre` text NOT NULL,
  `emite` datetime NOT NULL DEFAULT current_timestamp(),
  `href` varchar(40) NOT NULL,
  `valor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `sobre`, `emite`, `href`, `valor`) VALUES
(1, 'Informática', '', '2022-12-19 07:59:56', 'informatica', ''),
(2, 'Medicina', 'Está disponível para você que busca conhecimento', '2022-12-19 08:02:03', 'medicina', ''),
(3, 'Economia', 'Está disponível para você que busca conhecimento', '2022-12-19 08:02:43', 'economia', '20.000'),
(4, 'Contabilidade', 'Está disponível para você que busca conhecimento', '2022-12-19 08:42:55', 'contabilidade', ''),
(5, 'CH', 'Está disponível para você que busca conhecimento', '2022-12-19 14:09:09', 'ch', ''),
(8, 'CEF', 'Está disponível para você que busca conhecimento', '2023-01-12 13:55:26', 'cef', ''),
(9, 'CV', 'Está disponível para você que busca conhecimento', '2023-01-12 13:56:08', 'cv', ''),
(16, 'Xander', 'Está disponível para você que busca conhecimento', '2023-01-29 16:06:56', 'xander', ''),
(22, 'FL Studio', 'Está disponível para você que busca aprender a criar:\r\n\r\n* Beats \r\n* Instrumental\r\n* Masterização ', '2023-01-29 16:25:29', 'fl-studio', ''),
(23, 'cfb', '*Curso bom*\r\n', '2023-01-30 11:47:24', 'cfb', '20.000'),
(24, 'Sharp', '', '2023-02-17 09:30:13', 'sharp', '20.000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `id` int(11) NOT NULL,
  `curso` varchar(40) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobre` text NOT NULL,
  `valor` varchar(100) NOT NULL,
  `emite` datetime NOT NULL DEFAULT current_timestamp(),
  `href` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pacotes`
--

INSERT INTO `pacotes` (`id`, `curso`, `nome`, `sobre`, `valor`, `emite`, `href`) VALUES
(1, 'sharp', 'WPF', '**Neste pacote vais poder aprender a criar aplicação desktop profissional**\r\n\r\nNele veras como criar\r\n\r\n- Designer  Moderno\r\n- Animação\r\n\r\n**Bónus**\r\n\r\nIrais aprender a utilizar o MATERIAL DESIGNER\r\n\r\n', '15.000', '2023-02-19 06:23:27', 'wpf'),
(11, 'sharp', 'Win From', '**Neste pacote aprenderas como criar sistemas**\r\n\r\nComo:\r\n\r\n- SMC [Sistema de Matrícula e confirmação]\r\n- SGN [Sistema de Gestão de Nota]\r\n- SVC [Sistema de Venda e Compra]', '5.000', '2023-02-19 14:27:35', 'win-from');

-- --------------------------------------------------------

--
-- Estrutura da tabela `xonline`
--

CREATE TABLE `xonline` (
  `id` int(11) NOT NULL,
  `logo` varchar(40) NOT NULL DEFAULT 'logo.png',
  `nome` varchar(40) NOT NULL DEFAULT 'X Online',
  `email` varchar(40) NOT NULL DEFAULT 'xonline@gmail.com',
  `telefone` varchar(20) NOT NULL DEFAULT '+244 999-999-99',
  `facebook` varchar(40) NOT NULL DEFAULT '@xonline',
  `instagram` varchar(40) NOT NULL DEFAULT '@xonline',
  `linkdin` varchar(40) NOT NULL DEFAULT '@xonline',
  `moeda` varchar(10) NOT NULL DEFAULT 'Kz',
  `simg` varchar(40) NOT NULL,
  `stitulo` varchar(40) NOT NULL DEFAULT 'X Online',
  `sinfo` text NOT NULL,
  `local` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `xonline`
--

INSERT INTO `xonline` (`id`, `logo`, `nome`, `email`, `telefone`, `facebook`, `instagram`, `linkdin`, `moeda`, `simg`, `stitulo`, `sinfo`, `local`) VALUES
(1, 'logo.png', 'X Online', 'xonline@gmail.com', '+244 999-999-99', '@xonline', '@xonline', '@xonline', 'Kz', '', 'X Online', 'É um sistema que permite fazer registros e consulta de cursos e alunos. Dando também a possiblidade de: - Criar pacotes para um curso específico.- Imprimir a ficha de matrícula do aluno.- Permitir ou não que alunos visualizem suas informações.- Permitir ou não o registro de alunos com conta pública.', 'País X/ Cidade /Rua X');

-- --------------------------------------------------------

--
-- Estrutura da tabela `x_conta`
--

CREATE TABLE `x_conta` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `emite` datetime DEFAULT current_timestamp(),
  `tipo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `x_conta`
--

INSERT INTO `x_conta` (`id`, `nome`, `email`, `senha`, `emite`, `tipo`) VALUES
(1, 'X Online', 'xonline@gmail.com', '2c27c28da9081b1e737a8887f89ebc28', NULL, 1),
(8, 'Xavier Moisés Alberto José', 'xmaj@gmail.com', '81a136a16047dbb95e3df350e971ad91', '2023-02-25 12:16:27', 2),
(9, 'vdfffff', 'xmac@gmail.com', '81a136a16047dbb95e3df350e971ad91', '2023-02-27 10:45:23', 1),
(10, 'XD', 'xmaj2003@gmail.com', '81a136a16047dbb95e3df350e971ad91', '2023-03-03 05:58:12', 2),
(11, 'xd', 'xmaj20010@gmail.com', '81a136a16047dbb95e3df350e971ad91', '2023-03-09 13:14:22', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursar`
--
ALTER TABLE `cursar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `xonline`
--
ALTER TABLE `xonline`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `x_conta`
--
ALTER TABLE `x_conta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `cursar`
--
ALTER TABLE `cursar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `xonline`
--
ALTER TABLE `xonline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `x_conta`
--
ALTER TABLE `x_conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
