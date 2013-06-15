-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 15/06/2013 às 10:02:37
-- Versão do Servidor: 5.5.31-0ubuntu0.13.04.1
-- Versão do PHP: 5.4.9-4ubuntu2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projeto_empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id_areas` int(11) NOT NULL,
  `nome_area` varchar(200) NOT NULL,
  PRIMARY KEY (`id_areas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcoes`
--

CREATE TABLE IF NOT EXISTS `funcoes` (
  `id_trabalho` int(100) NOT NULL,
  `id_publicacao` int(100) NOT NULL,
  `email_pessoa` varchar(100) NOT NULL,
  `funcao` char(1) NOT NULL,
  `instituicao` varchar(255) NOT NULL,
  KEY `id_trabalho` (`id_trabalho`,`id_publicacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_pessoa` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pessoa`),
  UNIQUE KEY `id` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE IF NOT EXISTS `publicacao` (
  `id_publicacao` int(11) NOT NULL,
  `nome_publicacao` varchar(200) NOT NULL,
  `data_publicacao` date NOT NULL,
  PRIMARY KEY (`id_publicacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE IF NOT EXISTS `trabalho` (
  `id_trabalho` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `resumo` text NOT NULL,
  `palavras_chaves` varchar(150) NOT NULL,
  `arquivo` varchar(200) NOT NULL,
  `date_cad` datetime NOT NULL,
  `referencias` text NOT NULL,
  `hipostese` text NOT NULL,
  `metodologia` text NOT NULL,
  `objetivo` text NOT NULL,
  `resultado` text NOT NULL,
  PRIMARY KEY (`id_trabalho`),
  UNIQUE KEY `id_trabalho` (`id_trabalho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trab_areas`
--

CREATE TABLE IF NOT EXISTS `trab_areas` (
  `id_trabalho` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  KEY `id_trabalho` (`id_trabalho`,`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trab_publicacao`
--

CREATE TABLE IF NOT EXISTS `trab_publicacao` (
  `id_trabalho` int(100) NOT NULL,
  `id_publicacao` int(100) NOT NULL,
  KEY `id_trabalho` (`id_trabalho`),
  KEY `id_trabalho_2` (`id_trabalho`),
  KEY `id_publicacao` (`id_publicacao`),
  KEY `id_trabalho_3` (`id_trabalho`),
  KEY `id_trabalho_4` (`id_trabalho`),
  KEY `id_trabalho_5` (`id_trabalho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
