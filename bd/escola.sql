-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2017 às 20:29
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbaluno`
--

CREATE TABLE IF NOT EXISTS `tbaluno` (
  `nome` varchar(100) NOT NULL,
  `matricula` int(11) NOT NULL,
  `dtnasc` date NOT NULL,
  `turma` varchar(50) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `fone` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbaluno`
--

INSERT INTO `tbaluno` (`nome`, `matricula`, `dtnasc`, `turma`, `responsavel`, `endereco`, `email`, `senha`, `cidade`, `fone`) VALUES
('Aline Araujo', 1, '2000-04-21', '3º Informatica', 'Antonia Aldeci de Araujo Souza', 'Fcº Leandro Lima, nº66', 'aline@gmail.com', 'aline123', 'Pedra Branca', 99999999);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprofessor`
--

CREATE TABLE IF NOT EXISTS `tbprofessor` (
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `dtnasc` date NOT NULL,
  `disciplina` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `fone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprofessor`
--

INSERT INTO `tbprofessor` (`nome`, `cpf`, `dtnasc`, `disciplina`, `area`, `endereco`, `cidade`, `fone`, `email`, `senha`) VALUES
('Carlos Henrique', 2147483647, '0000-00-00', 'Matemática', 'Exatas', 'Centro', 'Pedra Branca', 2147483647, 'carlao@gmail.com', 'carlao123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
