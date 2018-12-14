-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 14-Dez-2018 às 20:35
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(4) NOT NULL,
  `senha` varchar(3) NOT NULL,
  `confirmacao` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`, `confirmacao`) VALUES
('root', '123', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `idade` varchar(3) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(13) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `municipio` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `doenca` varchar(40) DEFAULT NULL,
  `medicamento` varchar(40) DEFAULT NULL,
  `sintoma` varchar(40) DEFAULT NULL,
  `acompanhamento` varchar(40) DEFAULT NULL,
  `h_alimentar` varchar(40) DEFAULT NULL,
  `familia` varchar(100) DEFAULT NULL,
  `evento` varchar(40) DEFAULT NULL,
  `social` varchar(40) DEFAULT NULL,
  `h_lazer` varchar(40) DEFAULT NULL,
  `grupo` varchar(40) DEFAULT NULL,
  `reprovacao` varchar(20) DEFAULT NULL,
  `dificuldade` varchar(40) DEFAULT NULL,
  `h_estudo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `nome`, `sexo`, `idade`, `cpf`, `telefone`, `celular`, `cep`, `bairro`, `municipio`, `endereco`, `doenca`, `medicamento`, `sintoma`, `acompanhamento`, `h_alimentar`, `familia`, `evento`, `social`, `h_lazer`, `grupo`, `reprovacao`, `dificuldade`, `h_estudo`) VALUES
(2, 'Jhonnata Novaes Pires', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
