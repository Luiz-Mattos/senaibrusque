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
-- Banco de Dados: `sistemasenai`
--
CREATE DATABASE `sistemasenai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistemasenai`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `idautor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  PRIMARY KEY (`idautor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`idautor`, `nome`) VALUES
(1, 'Luiz'),
(2, 'Paulo'),
(3, 'Eduardo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(60) NOT NULL,
  `cod` varchar(40) NOT NULL,
  `situacao` tinyint(1) NOT NULL DEFAULT '0',
  `dtCadastro` datetime NOT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idautor` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `resumo` varchar(150) NOT NULL,
  `conteudo` text NOT NULL,
  `dtCadastro` datetime NOT NULL,
  `dtAtualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idautor` (`idautor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `idautor`, `titulo`, `resumo`, `conteudo`, `dtCadastro`, `dtAtualizacao`) VALUES
(1, 1, 'Noticia 1', 'Resumo da noticia 1', '<p>Paragrafo noticia 1</p>\r\n<p>Paragrafo noticia 1</p>\r\n<p>Paragrafo noticia 1</p>', '2015-12-02 19:40:59', NULL),
(2, 2, 'Noticia 2', 'Resumo da noticia 1', '<p>Noticia 2 </p>\r\n<p>Noticia 2 </p>\r\n<p>Noticia 2 </p>', '2015-12-02 19:41:53', NULL),
(3, 3, 'Noticia 3', 'Resumo da noticia 3', '<p>Noticia 3 </p>\r\n<p>Noticia 3 </p>\r\n<p>Noticia 3 </p>', '2015-12-02 19:42:21', NULL);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`idautor`) REFERENCES `autor` (`idautor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
