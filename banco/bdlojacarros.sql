-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10-Nov-2019 às 23:05
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.3.11-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlojacarros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `cpfCliente` varchar(20) NOT NULL,
  `cnhCliente` varchar(50) NOT NULL,
  `enderecoCliente` varchar(100) NOT NULL,
  `numeroCliente` varchar(10) NOT NULL,
  `complementoCliente` varchar(10) NOT NULL,
  `bairroCliente` varchar(50) NOT NULL,
  `cidadeCliente` varchar(50) NOT NULL,
  `cepCliente` varchar(20) NOT NULL,
  `ufCliente` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblocacao`
--

CREATE TABLE `tblocacao` (
  `idLocacao` int(11) NOT NULL,
  `dataInicial` date NOT NULL,
  `dataFinal` date NOT NULL,
  `valorTotal` double NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmarca`
--

CREATE TABLE `tbmarca` (
  `idMarca` int(11) NOT NULL,
  `nomeMarca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbmarca`
--

INSERT INTO `tbmarca` (`idMarca`, `nomeMarca`) VALUES
(1, 'tesla'),
(2, 'bmw'),
(3, 'volkswagen'),
(4, 'volkswagen'),
(5, 'mercedez'),
(6, 'honda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `loginUsuario` varchar(30) NOT NULL,
  `senhaUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbveiculo`
--

CREATE TABLE `tbveiculo` (
  `idVeiculo` int(11) NOT NULL,
  `anoVeiculo` int(4) NOT NULL,
  `corVeiculo` varchar(25) NOT NULL,
  `modeloVeiculo` varchar(100) NOT NULL,
  `valorDiariaVeiculo` decimal(5,2) NOT NULL,
  `imgVeiculo` varchar(255) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbveiculo`
--

INSERT INTO `tbveiculo` (`idVeiculo`, `anoVeiculo`, `corVeiculo`, `modeloVeiculo`, `valorDiariaVeiculo`, `imgVeiculo`, `idMarca`) VALUES
(42, 2019, 'Branco', 'BMW Série X3', '600.00', '../../img/veiculos/42.jpg', 2),
(43, 2019, 'Azul', 'BMW M8', '720.00', '../../img/veiculos/43.jpg', 2),
(44, 2019, 'Branco', 'Teste', '400.00', '../../img/veiculos/44.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD PRIMARY KEY (`idLocacao`),
  ADD KEY `FK_idCliente` (`idCliente`),
  ADD KEY `FK_idVeiculo` (`idVeiculo`),
  ADD KEY `FK_idUsuario` (`idUsuario`);

--
-- Indexes for table `tbmarca`
--
ALTER TABLE `tbmarca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `FK_idMarca` (`idMarca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblocacao`
--
ALTER TABLE `tblocacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbveiculo`
--
ALTER TABLE `tbveiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD CONSTRAINT `tblocacao_ibfk_1` FOREIGN KEY (`idVeiculo`) REFERENCES `tbveiculo` (`idVeiculo`),
  ADD CONSTRAINT `tblocacao_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tblocacao_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Limitadores para a tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD CONSTRAINT `tbveiculo_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `tbmarca` (`idMarca`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
