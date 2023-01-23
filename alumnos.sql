-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2023 a las 08:17:08
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

CREATE TABLE matriculas (
  idMatriculas int(11) NOT NULL,
  codigo` int(11) NOT NULL,
  nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  apellidos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `notaFinal` int(11) NOT NULL,
  `aprobado` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `suspenso` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`idMatriculas`, `codigo`, `nombre`, `apellidos`, `notaFinal`, `aprobado`, `suspenso`) VALUES
(1, 2345, 'sdffh', 'sdfg', 7, 'x', ''),
(2, 4567, 'dffhj', 'sdfg', 6, 'x', ''),
(3, 789, 'Ana', 'sdf', 8, 'x', ''),
(4, 341, 'Maria', 'dfhkk', 5, 'x', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE notas (
  idNota int(11) primary key NOT NULL,
  constraint fk_idNota foreign key (idAlumno) on delete cascade,
  codigo int(11) NOT NULL,
  nota1 float NOT NULL,
  nota2 float NOT NULL,
  nota3 float NOT NULL,
  notaFinal float NOT NULL,
  aprobado varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  suspenso varchar(10) COLLATE latin1_spanish_ci NOT NULL);

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idNota`, `codigo`, `nota1`, `nota2`, `nota3`, `notaFinal`, `aprobado`, `suspenso`) VALUES
(1, 234, 5, 6, 8, 6, 'x', ''),
(2, 414, 4, 7, 8, 4, '', 'x'),
(3, 12, 5, 7, 9, 8, 'x', ''),
(4, 678, 5, 8, 3, 4, '', 'x'),
(5, 879, 5, 5, 5, 5, 'x', ''),
(6, 4567, 6, 9, 10, 7, 'x', ''),
(7, 7890, 5, 3, 4, 4, '', 'x'),
(8, 4567, 4, 3, 2, 3, '', 'x');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username`
--

CREATE TABLE username (
  idAlumno int(11) NOT NULL,
  codigo int(11) NOT NULL,
  nombre varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  apellidos varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  telefono int(11) NOT NULL,
  email varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  direccion varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  idNota int(11) NOT NULL,
  idMatriculas int(11) NOT NULL);

--
-- Volcado de datos para la tabla `username`
--

INSERT INTO `username` (`idAlumno`, `codigo`, `nombre`, `apellidos`, `telefono`, `email`, `direccion`, `idNota`, `idMatriculas`) VALUES
(1, 123, 'Maria ', 'Fernandez Moreno', 654787878, 'maria@gmail.com', 'Calle Mayor, 23 Madrid', 0, 0),
(2, 456, 'Juan ', 'Rubio Gallego', 123456789, 'juan@gmail.com', 'Paseo de la Castellana, 100 Madrid', 0, 0),
(3, 500, 'Pablo', 'Hernandez Sanchez', 987654321, 'pablo@gmail.com', 'Calle de Sol, 20 Madrid', 0, 0),
(4, 367, 'Ana ', 'Herrera Aviles', 234675432, 'ana@gmail.com', 'Plaza de la Alegria, 37 Madrid', 0, 0),
(5, 123, 'sdfgsdfg', 'sdfg', 45678, 'werty@cghjj', 'sdfhh', 123, 123),
(6, 879, 'erty', 'dfhj', 56, 'dfhj@dc', 'dfg', 879, 879),
(7, 34567, 'sdfghj', 'rjjgf', 346, 'sdfgg@cvb', 'ouuhj', 7, 7),
(8, 2345, 'ert', 'erty', 345, 'ert@dfg', 'wert', 8, 8),
(9, 4567, 'asdfg', 'asddfg', 345, 'ert@ert', 'dfhjj', 3, 4),
(10, 45688, 'wrty', 'bnmmj', 456, 'dfh@wr', 'djjgjv', 6, 7),
(11, 345, 'ssghjfur', 'chgfhjjnm', 43, 'sef@dg', 'gfjj', 0, 0),
(12, 567, 'ghdjfkg', 'dhhgj', 43, 'dgfh@hj', 'ghjk', 3, 5),
(13, 4567, 'ghjfj', 'fghd', 346, 'gfhj@jdf', 'dgh', 4, 5),
(14, 456, 'dfhj', 'dfghh', 234, 'fhgj@hjk', 'fghdjjn', 5, 6),
(15, 678, 'fdghfjv', 'hj', 456, 'fghh@hjj', 'fghj', 6, 87),
(16, 4567, 'ghjk', 'hjhjk', 456, 'dfg@hjj', 'dfghj', 5, 45),
(17, 567, 'ghjk', 'jjgf', 45, 'ghh@jhg', 'dgtrv', 56, 56),
(18, 456, 'fghjt', 'ghhty', 567, 'gtrty@jh', 'gtyry', 56, 78),
(19, 567, 'dhhfgyt', 'hgyuy', 567, 'fhjgg@ghj', 'bhfhyg', 54, 45),
(20, 567, 'vfhyt', 'vgfrt', 45, 'gfhruju@hyhfy', 'dfgry', 34, 56),
(21, 2345, 'ghjfjjf', 'gfhjtu', 3456, 'huuty@hhgj', 'ghfhty', 345, 3456),
(22, 222, 'Juan', 'Garcia', 3456, 'juan@gmail.com', 'dfg', 223, 234),
(23, 123, 'Ana', 'Garcia', 23355456, 'ana@gmail.com', 'calle Mayor', 0, 0);

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
  MODIFY `idMatriculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `username`
--
ALTER TABLE `username`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`idMatriculas`) REFERENCES `username` (`idAlumno`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idNota`) REFERENCES `username` (`idAlumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
