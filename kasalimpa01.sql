-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql01-farm57.uni5.net
-- Tempo de geração: 05/05/2016 às 11:05
-- Versão do servidor: 5.5.43-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `kasalimpa01`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `codcli` primary key int(200) NOT NULL,
  `nomecli` varchar(30) NOT NULL,
  `senhacli` varchar(30) NOT NULL,
  `emailcli` varchar(100) NOT NULL,
  `tipocli` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `codpro` primary key int(200) NOT NULL,
  `nomepro` varchar(100) NOT NULL,
  `generopro` varchar(100) NOT NULL,
  `autorpro` varchar(100) NOT NULL,
  `precopro` int(10) NOT NULL,
  `descricaopro` varchar(200) NOT NULL,
  `editorapro` varchar(100) NOT NULL,
  `imgpro` varchar(1000) NOT NULL,
  `qntpro` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

