-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 08:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisismuestras`
--

CREATE TABLE `analisismuestras` (
  `idAnalisisMuestras` int(10) NOT NULL,
  `fechaRecepcion` date DEFAULT NULL,
  `temperaturaMuestra` decimal(3,1) DEFAULT NULL,
  `cantidadMuestra` int(10) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL,
  `codigo_empresa` int(11) DEFAULT NULL,
  `codigo_particular` int(11) DEFAULT NULL,
  `rutEmpleado` varchar(10) DEFAULT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `rutContacto` varchar(10) NOT NULL,
  `nombreContacto` varchar(100) NOT NULL,
  `emailContacto` varchar(100) NOT NULL,
  `telefonoContacto` int(10) NOT NULL,
  `idEmpresaC` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`rutContacto`, `nombreContacto`, `emailContacto`, `telefonoContacto`, `idEmpresaC`) VALUES
('11111111', 'aaa', '', 558896, 1);

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(10) NOT NULL,
  `rol` int(2) NOT NULL,
  `nombreEmpleado` varchar(30) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `rutEmpleado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `rol`, `nombreEmpleado`, `idUsuario`, `rutEmpleado`) VALUES
(1, 3, 'Admin', 11, '10161207-4');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(10) NOT NULL,
  `rutEmpresa` varchar(10) NOT NULL,
  `nombreEmpresa` varchar(200) NOT NULL,
  `direccionEmpresa` varchar(200) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `rutEmpresa`, `nombreEmpresa`, `direccionEmpresa`, `idUsuario`) VALUES
(1, '194756828', 'Fabrica arieles', 'los arieles', 3);

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE `particular` (
  `idParticular` int(10) NOT NULL,
  `rutParticular` varchar(10) NOT NULL,
  `nombreParticular` varchar(200) NOT NULL,
  `direccionParticular` varchar(200) NOT NULL,
  `telefonoParticular` int(10) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`idParticular`, `rutParticular`, `nombreParticular`, `direccionParticular`, `telefonoParticular`, `idUsuario`) VALUES
(3, '19672371', 'Maxi Salvo', 'Los platanos 231 macul', 71072097, 4),
(4, '18882607-5', 'juan', 'lota', 123, 12);

-- --------------------------------------------------------

--
-- Table structure for table `resultadoanalisis`
--

CREATE TABLE `resultadoanalisis` (
  `fechaRegistro` date NOT NULL,
  `idResultadoAnalisis` int(20) NOT NULL,
  `PPM` int(100) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `idAnalisisMuestras` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `contrasena`, `tipo`, `estado`) VALUES
(3, 'fr.leonl1012@gmail.com', '123', 'particular', 'H'),
(4, 'maxi@gmail.com', '123', 'particular', 'H'),
(5, 'fr.leonl@gmail.com', '123', 'empresa', 'H'),
(7, 'ariel@gmail.com', '123', 'empresa', 'H'),
(11, 'admin@gmail.com', '123', 'empleado', 'H'),
(12, 'minato1932@gmail.com', '123', 'particular', 'H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD PRIMARY KEY (`idAnalisisMuestras`),
  ADD KEY `analisismuestras_ibfk_1` (`codigo_empresa`),
  ADD KEY `analisismuestras_ibfk_2` (`codigo_particular`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD KEY `idEmpresaC` (`idEmpresaC`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `empleado_ibfk_1` (`idUsuario`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indexes for table `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`idParticular`);

--
-- Indexes for table `resultadoanalisis`
--
ALTER TABLE `resultadoanalisis`
  ADD PRIMARY KEY (`idResultadoAnalisis`),
  ADD KEY `FK_AnalisisMuestras` (`idAnalisisMuestras`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisismuestras`
--
ALTER TABLE `analisismuestras`
  MODIFY `idAnalisisMuestras` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `particular`
--
ALTER TABLE `particular`
  MODIFY `idParticular` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resultadoanalisis`
--
ALTER TABLE `resultadoanalisis`
  MODIFY `idResultadoAnalisis` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD CONSTRAINT `analisismuestras_ibfk_1` FOREIGN KEY (`codigo_empresa`) REFERENCES `empresa` (`idEmpresa`),
  ADD CONSTRAINT `analisismuestras_ibfk_2` FOREIGN KEY (`codigo_particular`) REFERENCES `particular` (`idParticular`);

--
-- Constraints for table `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`idEmpresaC`) REFERENCES `empresa` (`idEmpresa`);

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `particular`
--
ALTER TABLE `particular`
  ADD CONSTRAINT `particular_ibfk_1` FOREIGN KEY (`idParticular`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `resultadoanalisis`
--
ALTER TABLE `resultadoanalisis`
  ADD CONSTRAINT `FK_AnalisisMuestras` FOREIGN KEY (`idAnalisisMuestras`) REFERENCES `analisismuestras` (`idAnalisisMuestras`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
