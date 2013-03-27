-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `pfmdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(60) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefone1` varchar(13) DEFAULT NULL,
  `telefone2` varchar(13) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `telefone1`, `telefone2`, `email`, `usuario_id`) VALUES
(1, 'RUA IMPERADOR', '233', NULL, 'CANDEIAS', 'JABOATAO', 'PE', '50000-000', '(81)3333-4444', '(81)3333-4444', 'luis.c.ferraz@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo` enum('admin','user') NOT NULL,
  `nome` varchar(60) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `admissao` varchar(10) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`, `nome`, `matricula`, `cpf`, `admissao`, `nascimento`) VALUES
(1, 'luisc', '111', 'admin', 'LUIS CARLOS FERRAZ', '10', '054.553.704-56', '0000-00-00', ''),
(4, 'tina', '982', 'user', 'TINA FERRAZ', '213', '092.872.230-09', '0000-00-00', ''),
(9, 'john', '123', 'user', 'JOHNNY WALKER', '9839', '002.132.144-12', '2013-03-25', ''),
(10, 'catarina', '123', 'admin', 'CATARINA FERRAZ', '122', '120.223.123-22', '03/12/2010', '01/12/2000'),
(11, 'juliana', '982', 'admin', 'MARIA CAROLINA FERRAZ', '09320', '032.032.032-12', '03/12/2010', '01/12/2000'),
(12, 'paul', '123', 'admin', 'PAUL KNIGHT', '122', '111.222.923-12', '03/12/2010', '01/12/2000'),
(13, 'luisc', '123', 'admin', 'LUIS CARLOS FERRAZ', '09320', '123.133.212-13', '03/12/2010', '01/12/2000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
