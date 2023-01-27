-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 19:48:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `idMatriculas` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `notaFinal` int(11) NOT NULL,
  `aprobado` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `suspenso` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `idNota` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `notaFinal` float NOT NULL,
  `aprobado` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `suspenso` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idNota`, `codigo`, `nota1`, `nota2`, `nota3`, `notaFinal`, `aprobado`, `suspenso`) VALUES
(1, 10, 6, 8, 8, 7.33, 'X', ''),
(2, 20, 8, 9, 7, 8, 'X', ''),
(3, 30, 7, 8, 6, 7, 'X', ''),
(4, 40, 4, 3, 4, 3.65, '', 'X'),
(5, 50, 5, 4, 3, 4, '', 'X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username`
--

CREATE TABLE `username` (
  `idAlumno` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `idNota` int(11) NOT NULL,
  `idMatriculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `username`
--

INSERT INTO `username` (`idAlumno`, `codigo`, `nombre`, `apellidos`, `telefono`, `email`, `direccion`, `idNota`, `idMatriculas`) VALUES
(1, 10, 'Ana', 'Garcia Fernandez', 654321765, 'ana@gmail.com', 'Calle Mayor, 23 Madrid', 1, 1),
(2, 20, 'Maria', 'Moreno Aviles', 678943215, 'maria@gmail.com', 'Paseo de la castellana, 143 Madrid', 2, 2),
(3, 30, 'Juan', 'Lopez Gallego', 654321789, 'juan@gmail.com', 'Calle Juan de la Cierva, 50 Madrid', 3, 3),
(4, 40, 'Jose', 'Hernandez Rubio', 678901234, 'jose@gmail.com', 'Plaza de Alegria, 2 Madrid', 4, 4),
(5, 50, 'Carmen', 'Montero Blanco', 654321789, 'carmen@gmail.com', 'Calle Serrano, 8 Madrid', 5, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`idMatriculas`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`idNota`);

--
-- Indices de la tabla `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`idAlumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `idMatriculas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `username`
--
ALTER TABLE `username`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`idMatriculas`) REFERENCES `username` (`idAlumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idNota`) REFERENCES `username` (`idAlumno`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
