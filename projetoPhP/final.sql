-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Nov-2019 às 05:26
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `id_holerite` int(11) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `id_fornecedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `dt_nasc` date NOT NULL,
  `dt_contra` date NOT NULL,
  `senha` varchar(32) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `holerite`
--

DROP TABLE IF EXISTS `holerite`;
CREATE TABLE IF NOT EXISTS `holerite` (
  `id_holerite` int(11) NOT NULL AUTO_INCREMENT,
  `salario_bruto` double NOT NULL,
  `inss` varchar(20) NOT NULL,
  `irrf` varchar(20) NOT NULL,
  `va` double NOT NULL,
  `vt` double NOT NULL,
  `data_pag` date NOT NULL,
  `salario_liq` double NOT NULL,
  `stats_pg` varchar(3) NOT NULL,
  PRIMARY KEY (`id_holerite`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notafiscal`
--

DROP TABLE IF EXISTS `notafiscal`;
CREATE TABLE IF NOT EXISTS `notafiscal` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `data_emissao` date NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` double NOT NULL,
  `peca` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `qtd`, `descricao`, `preco`, `peca`, `foto`, `id_fornecedor`) VALUES
(1, 'Sapato Social Masculino Envernizado Vinho', 50, 'Sapato social masculino em couro e verniz com uma fivela e desingn inovador!', 190.9, 'sapato', 'produtos/sapato1.jpg', 1),
(2, 'Sapato social masculino 448027-001 AIR SPOT', 0, 'Sapato social masculino 448027-001 linha AIR SPOT é um lindo modelo feito em couro.', 200, 'sapato', 'produtos/sapato2.jpg', 1),
(3, 'chapéu-panamá', 20, 'Tamanho Único O chapéu-panamá é, apesar do nome, fabricado no Equador.', 100, 'chapeu', 'produtos/chapeu1.jpg', 1),
(4, 'Chapéu Pralana 5X', 15, 'Chapéu Pralana 5X Campo II, 100% Lâ. Aba com 10 centímetros e carneira elástica.', 150, 'chapeu', 'produtos/chapeu2.jpg', 1),
(5, 'Calça masculina, modelo cargo', 50, 'Calça masculina, modelo cargo. Confeccionada em algodão, possui bolsos nas laterais.', 100, 'calca', 'produtos/calca2.jpg', 1),
(6, 'Calça Masculina de caminhada na natureza', 20, 'Para acompanhar as suas caminhadas de um dia em planície, floresta ou litoral com tempo.', 99.99, 'calca', 'produtos/calca1.jpg', 1),
(7, 'Camiseta com estampa de Pug', 10, 'Composição: 100% algodão. Modelo: Masculino', 75.1, 'blusa', 'produtos/blusa2.jpg', 1),
(8, 'Camisetas Masculinas Anfitrião Azul', 10, 'Camisetas Masculinas Anfitrião Azul Tipo do Produto: camiseta masculina Modelagem: Reta', 100, 'blusa', 'produtos/blusa1.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
