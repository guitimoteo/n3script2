-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Nov 12, 2014 as 04:55 AM
-- Versão do Servidor: 5.1.44
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `n3script`
--
CREATE DATABASE `n3script` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `n3script`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor` varchar(20) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `pedido` int(11) DEFAULT NULL,
  `unidade` varchar(20) NOT NULL,
  `observacoes` varchar(100) NOT NULL,
  `data` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `fornecedor`, `cnpj`, `descricao`, `quantidade`, `estoque`, `pedido`, `unidade`, `observacoes`, `data`) VALUES
(1001, 'asdf', '123121321', 'asdf', 4, 12, 6, '11', 'qwer', '12/12/2014'),
(1002, 'asdf', '123121321', 'asdf', 11, 12, 14, 'Pacote', 'cvbncvbn', '12/12/2014');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `password`, `role`) VALUES
(0, 'fatec', 'fatec@fatec', 'cb8a3a4973d7a110cf493baa2bad71c45641e957', 'admin');
