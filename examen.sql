-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2018 a las 05:43:14
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisismuestras`
--

CREATE TABLE `analisismuestras` (
  `idAnalisisMuestras` int(10) NOT NULL,
  `fechaRecepcion` date DEFAULT NULL,
  `temperaturaMuestra` decimal(3,1) DEFAULT NULL,
  `cantidadMuestra` int(10) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `rutContacto` varchar(10) NOT NULL,
  `nombreContacto` varchar(100) NOT NULL,
  `emailContacto` varchar(100) NOT NULL,
  `telefonoContacto` int(10) NOT NULL,
  `idEmpresaC` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`rutContacto`, `nombreContacto`, `emailContacto`, `telefonoContacto`, `idEmpresaC`) VALUES
('11111111', 'aaa', '', 558896, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(10) NOT NULL,
  `rutEmpleado` int(9) NOT NULL,
  `contraseñaEmpleado` varchar(50) NOT NULL,
  `emailEmpleado` varchar(100) NOT NULL,
  `rol` int(2) NOT NULL,
  `nombreEmpleado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(100) NOT NULL,
  `rutEmpresa` varchar(10) NOT NULL,
  `nombreEmpresa` varchar(200) NOT NULL,
  `direccionEmpresa` varchar(200) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `rutEmpresa`, `nombreEmpresa`, `direccionEmpresa`, `idUsuario`) VALUES
(1, '194756828', 'Fabrica arieles', 'los arieles', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

CREATE TABLE `particular` (
  `idParticular` int(11) NOT NULL,
  `rutParticular` int(10) NOT NULL,
  `nombreParticular` int(100) NOT NULL,
  `direccionParticular` int(200) NOT NULL,
  `telefonoParticular` int(10) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `particular`
--

INSERT INTO `particular` (`idParticular`, `rutParticular`, `passParticular`, `nombreParticular`, `direccionParticular`, `emailParticular`, `telefonoParticular`, `idUsuario`) VALUES
(1, 194756828, 0, 0, 0, 0, 978097364, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `contrasena`, `tipo`, `estado`) VALUES
(1, 'Fran', '123', 'empresa', ''),
(2, 'aaa@aa.com', '123', 'particular', ''),
(3, 'ariel@ariel.com', '123', 'empresa', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD PRIMARY KEY (`idAnalisisMuestras`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD KEY `idEmpresaC` (`idEmpresaC`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`idParticular`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  MODIFY `idAnalisisMuestras` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `particular`
--
ALTER TABLE `particular`
  MODIFY `idParticular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD CONSTRAINT `analisismuestras_ibfk_1` FOREIGN KEY (`idAnalisisMuestras`) REFERENCES `empresa` (`idEmpresa`) ON DELETE CASCADE,
  ADD CONSTRAINT `analisismuestras_ibfk_2` FOREIGN KEY (`idAnalisisMuestras`) REFERENCES `particular` (`idParticular`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`idEmpresaC`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `particular`
--
ALTER TABLE `particular`
  ADD CONSTRAINT `particular_ibfk_1` FOREIGN KEY (`idParticular`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--RESULTADO ANALISIS
CREATE TABLE `examen`.`resultadoAnalisis` (
   `fechaRegistro` DATE NOT NULL ,
    `idResultadoAnalisis` INT(20) NOT NULL AUTO_INCREMENT ,
     `PPM` INT(100) NOT NULL ,
      `ESTADO` BOOLEAN NOT NULL ,
      `idAnalisisMuestras` INT(10) NOT NULL,
       PRIMARY KEY (`idResultadoAnalisis`)) ENGINE = InnoDB;

ALTER TABLE resultadoanalisis ADD CONSTRAINT FK_AnalisisMuestras FOREIGN KEY (idAnalisisMuestras) REFERENCES analisismuestras (idAnalisisMuestras);

ALTER TABLE `empleado` DROP `contraseñaEmpleado`;
ALTER TABLE `empleado` DROP `emailEmpleado`;
ALTER TABLE `empleado` DROP `rutEmpleado`;
ALTER TABLE `empleado` ADD `idUsuario` INT(11) NOT NULL;

ALTER TABLE `empleado`
  ADD CONSTRAINT `FK_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);