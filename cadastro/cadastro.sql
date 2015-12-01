SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE sistemasenai;
use sistemasenai;

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