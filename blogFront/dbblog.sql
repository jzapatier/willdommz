-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 21:40:11
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbblog`
--
CREATE DATABASE IF NOT EXISTS `dbblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbblog`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scrolltable`
--

CREATE TABLE `scrolltable` (
  `idscroll` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `scrolltable`
--

INSERT INTO `scrolltable` (`idscroll`, `titulo`, `imagen`, `descripcion`) VALUES
(1, 'Cómo hacer paginación codigo en php y mysql', 'http://lorempixel.com/400/200/', NULL),
(2, 'lorempixel - placeholder images for every case', 'http://lorempixel.com/400/200/', NULL),
(3, 'Image Code Generator - HTML.am', 'http://lorempixel.com/400/200/', NULL),
(4, 'Ejemplo - Wikipedia, la enciclopedia libre', 'http://lorempixel.com/400/200/', NULL),
(5, 'Ejemplo - significado de ejemplo diccionario', 'http://lorempixel.com/400/200/', NULL),
(6, 'Curriculum Vitae - Ejemplos | Europass', 'http://lorempixel.com/400/200/', NULL),
(7, 'Pruebas psicotecnicas. Ejemplos pruebas psicotécnicas - navarra.es', 'http://lorempixel.com/400/200/', NULL),
(8, 'ejemplo - Definición - WordReference.com', 'http://lorempixel.com/400/200/', NULL),
(9, 'Ejemplos de fe | Fe verdadera - jw.org', 'http://lorempixel.com/400/200/', NULL),
(10, 'Ejemplos de matriz foda - Matriz Foda', 'http://lorempixel.com/400/200/', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `scrolltable`
--
ALTER TABLE `scrolltable`
  ADD PRIMARY KEY (`idscroll`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `scrolltable`
--
ALTER TABLE `scrolltable`
  MODIFY `idscroll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
