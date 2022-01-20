-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 01:32
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `equipe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_ideia`
--

CREATE TABLE `cad_ideia` (
  `Titu_ideia` varchar(250) NOT NULL,
  `prop` varchar(250) NOT NULL,
  `situa` varchar(250) NOT NULL,
  `material` varchar(250) NOT NULL,
  `vantage` varchar(250) NOT NULL,
  `tipo_ideia` varchar(250) NOT NULL,
  `area_hr` varchar(250) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `ctt` varchar(250) NOT NULL,
  `cod_ideia` int(11) NOT NULL,
  `autor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_ideia`
--

INSERT INTO `cad_ideia` (`Titu_ideia`, `prop`, `situa`, `material`, `vantage`, `tipo_ideia`, `area_hr`, `lugar`, `ctt`, `cod_ideia`, `autor`) VALUES
('', '', '', '', '', '', '', '', '', 1, ''),
('Melhoria do sistema GI', 'Melhorar o Sistema GI com a tecnologia PHP e JavaScript', 'Em andamento', 'Notebook, PHP, Visual Studio Code', 'Melhor performance, design intuitivo', '', '', '', '', 5, ''),
('qweqweq', 'qweqweqwe', 'weqewqe', 'eqweqewqqw', 'qweqweqwe', 'qeqweqeqw', 'qweqweqwe', 'qeqweqwe', 'qweqweqwe', 6, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome_imagem` varchar(220) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `obs` varchar(250) NOT NULL,
  `codigofun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome_imagem`, `nome`, `senha`, `email`, `telefone`, `obs`, `codigofun`) VALUES
('', 'Cesar Celke', 'vnbscxhvb', 'cesar@celke.com.br', '58785569', 'kfgnrfgnre', 12),
('', 'Felipe Johnnes', 'jcnvjzxbcz', 'FelipeJohn@Volkswagen.com', '578958566', 'chgdfighasg', 13),
('', 'Wesley Bezerra Martins', 'Alemanha', 'wesley.martins21@etec.sp.gov.br', '548598659', 'Gerente de proejtos.', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapa` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_usuario` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `chapa`, `senha_usuario`) VALUES
(1, 'Cesar', '725356', 'Eloeterno'),
(2, 'Ana Cristina', '7821555', 'Colombo'),
(3, 'Fernanda', '9824868', 'Paris');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_ideia`
--
ALTER TABLE `cad_ideia`
  ADD PRIMARY KEY (`cod_ideia`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`codigofun`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_ideia`
--
ALTER TABLE `cad_ideia`
  MODIFY `cod_ideia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `codigofun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
