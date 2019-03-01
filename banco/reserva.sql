-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Mar-2019 às 03:11
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserva`
--
CREATE DATABASE IF NOT EXISTS `reserva` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reserva`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idfuncionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(40) NOT NULL,
  `usuario_funcionario` varchar(40) NOT NULL,
  `CPF_funcionario` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha_funcionario` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `funcionario`
--

TRUNCATE TABLE `funcionario`;
--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome_funcionario`, `usuario_funcionario`, `CPF_funcionario`, `email`, `senha_funcionario`) VALUES
(1, 'Noel Lucas Cunha Magalhães', 'Nlnoel', '035.314.431-27', 'nlnoel.cnb@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Jose Tenta', 'JsTenta', '789.456.123-10', 'exemplo@exemplo.com', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_reserva`
--

DROP TABLE IF EXISTS `hora_reserva`;
CREATE TABLE IF NOT EXISTS `hora_reserva` (
  `salas_idsalas` int(10) UNSIGNED NOT NULL,
  `funcionario_idfuncionario` int(10) UNSIGNED NOT NULL,
  `hora_inicial` time NOT NULL,
  `hora_final` time NOT NULL,
  `dia_reserva` date NOT NULL,
  PRIMARY KEY (`salas_idsalas`,`funcionario_idfuncionario`),
  KEY `funcionario_idfuncionario` (`funcionario_idfuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `hora_reserva`
--

TRUNCATE TABLE `hora_reserva`;
--
-- Extraindo dados da tabela `hora_reserva`
--

INSERT INTO `hora_reserva` (`salas_idsalas`, `funcionario_idfuncionario`, `hora_inicial`, `hora_final`, `dia_reserva`) VALUES
(8, 1, '01:00:00', '02:00:00', '2018-12-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE IF NOT EXISTS `salas` (
  `idsalas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_sala` varchar(50) NOT NULL,
  `numero_sala` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idsalas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `salas`
--

TRUNCATE TABLE `salas`;
--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`idsalas`, `nome_sala`, `numero_sala`) VALUES
(1, 'sala1', 1),
(2, 'sala2', 2),
(3, 'sala3', 3),
(4, 'sala4', 4),
(5, 'sala7', 5),
(6, 'SalaExemplo', 9),
(7, 'sala10', 10),
(8, 'sala20', 20),
(9, 'teste500', 500),
(10, 'sala 1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
