-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 24-Dez-2018 às 14:12
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
-- Database: `educom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(4) NOT NULL DEFAULT 'root',
  `senha` varchar(8) NOT NULL DEFAULT 'frnt4510',
  `confirmacao` varchar(1) NOT NULL,
  `usuario2` varchar(8) NOT NULL DEFAULT 'paciente',
  `senha2` varchar(3) NOT NULL DEFAULT '123'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`, `confirmacao`, `usuario2`, `senha2`) VALUES
('root', 'frnt4510', '0', 'paciente', '123');

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
  `nasc` varchar(10) DEFAULT NULL,
  `e_civil` varchar(10) DEFAULT NULL,
  `filiacao` varchar(100) DEFAULT NULL,
  `escolaridade` varchar(20) DEFAULT NULL,
  `renda` varchar(7) DEFAULT NULL,
  `dependente` varchar(3) DEFAULT NULL,
  `q_inicial` varchar(100) DEFAULT NULL,
  `alteracao` varchar(100) DEFAULT NULL,
  `personalidade` varchar(100) DEFAULT NULL,
  `profissao` varchar(20) DEFAULT NULL,
  `prontuario` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `nome`, `sexo`, `idade`, `cpf`, `telefone`, `celular`, `cep`, `bairro`, `municipio`, `endereco`, `doenca`, `medicamento`, `sintoma`, `acompanhamento`, `h_alimentar`, `familia`, `evento`, `social`, `h_lazer`, `grupo`, `reprovacao`, `dificuldade`, `h_estudo`, `nasc`, `e_civil`, `filiacao`, `escolaridade`, `renda`, `dependente`, `q_inicial`, `alteracao`, `personalidade`, `profissao`, `prontuario`) VALUES
(4, 'Jasmine Ferreira', '', '21', '153.159.037', '21996091752', '21967398380', '24940880', 'Lote 27a Quadra', 'MaricÃ¡', 'Avenida Nossa Senhora de FÃ¡tima', 'Alergia a saudade', 'Beijo do namorado', 'Tristeza', '', 'Comilona', '', '', '', '', '', '', '', '', '21/04/1997', '', 'Anatikde', 'Superior', '10.000', '', 'Saudade do meu namorado', 'Desespero', '', 'Jornalista ', 'Jogando Bola'),
(3, 'Flavia Ribeiro Novaes Terroso', '', '44', '03682548793', '', '21973987337', '24736460', 'CamarÃ£o', 'SG', 'Rua Ana Marques 367', 'Nenhuma', 'Nenhum', 'NÃ£o', 'Psicoterapia', 'PÃ©ssimos', '', '', '', '', '', '', '', '', '03/06/1974', '', 'JoÃ£o / Tania', 'Ensino Superior', '2222,00', '3', 'Me sinto confuso sobre minha vida', 'Ansiedade', '', 'Psicologa', ''),
(5, 'Jhonnata Novaes Pires Noahlaster', '', '', 'Rua Jornali', '21971845545', '', '24020-350', '', 'NiterÃ³i', 'Rua Jornalista Moacir Padilha, Centro', '', '', '', '', '', 'Noahlaster', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
