-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2020 às 01:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_ADMIN` varchar(60) NOT NULL,
  `SENHA_ADMIN` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_ADMIN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`ID_ADMIN`, `NOME_ADMIN`, `SENHA_ADMIN`) VALUES
(1, 'Pedro', '334');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `ID_ALUNO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_ALUNO` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ESCOLA_ALUNO` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `RM_ALUNO` int(20) NOT NULL,
  `CIDADE_ALUNO` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO_ALUNO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_ALUNO`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`ID_ALUNO`, `NOME_ALUNO`, `ESCOLA_ALUNO`, `RM_ALUNO`, `CIDADE_ALUNO`, `ESTADO_ALUNO`) VALUES
(21, 'Pedro ', 'São Paulo', 180503, 'Sao Bernado', 'São Paulo'),
(20, 'Pedro', 'Lauro Gomes', 190504, 'Sao Bernado', 'São Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_USUARIO` varchar(30) NOT NULL,
  `SENHA_USUARIO` varchar(15) NOT NULL,
  `EMAIL_USUARIO` varchar(50) NOT NULL,
  `TELEFONE_USUARIO` varchar(20) NOT NULL,
  `state` text,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`ID_USUARIO`, `NOME_USUARIO`, `SENHA_USUARIO`, `EMAIL_USUARIO`, `TELEFONE_USUARIO`, `state`) VALUES
(1, 'Pedro', '147', 'teste@gmail.com', '14789', 'Aprovado'),
(2, 'Fernando Diniz', '123', 'jecatatu@gmail.com', '123497', 'Reprovado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
