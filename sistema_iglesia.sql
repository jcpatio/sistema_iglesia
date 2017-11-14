-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2017 a las 04:15:40
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_iglesia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_catequesis`
--

CREATE TABLE `estudiantes_catequesis` (
  `estudiante_id` int(11) NOT NULL,
  `nombres_estudiantes` varchar(500) NOT NULL,
  `apellidos_estudiantes` varchar(500) NOT NULL,
  `edad_estudiante` int(3) NOT NULL,
  `nacionalidad_estudiante` varchar(50) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `ndocumento_estudiante` varchar(100) NOT NULL,
  `lugar_nacimiento` varchar(100) NOT NULL,
  `estado_nacimiento` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_bautizo` date NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `telefono_celular` varchar(20) NOT NULL,
  `direccion_estudiante` varchar(500) NOT NULL,
  `institucion_educativa` varchar(100) NOT NULL,
  `grado_instruccion` varchar(2) NOT NULL,
  `seccion_instruccion` varchar(5) NOT NULL,
  `nombres_madre` varchar(250) NOT NULL,
  `apellidos_madre` varchar(250) NOT NULL,
  `nombres_padre` varchar(250) NOT NULL,
  `apellidos_padre` varchar(250) NOT NULL,
  `estado_civil` varchar(250) NOT NULL,
  `nombre_catequista` varchar(500) NOT NULL,
  `apellido_catequista` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `activo` char(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes_catequesis`
--

INSERT INTO `estudiantes_catequesis` (`estudiante_id`, `nombres_estudiantes`, `apellidos_estudiantes`, `edad_estudiante`, `nacionalidad_estudiante`, `tipo_documento`, `ndocumento_estudiante`, `lugar_nacimiento`, `estado_nacimiento`, `fecha_nacimiento`, `fecha_bautizo`, `telefono_fijo`, `telefono_celular`, `direccion_estudiante`, `institucion_educativa`, `grado_instruccion`, `seccion_instruccion`, `nombres_madre`, `apellidos_madre`, `nombres_padre`, `apellidos_padre`, `estado_civil`, `nombre_catequista`, `apellido_catequista`, `observaciones`, `activo`) VALUES
(1, 'juan carlos', 'patiño', 25, 'venezolana', 'Cedula', '20060128', 'san antonio', 'tachira', '1992-06-03', '2017-11-09', '02767871761', '04161359896', 'calle 3 # 7- 390', 'unidad educativa ureña', '3', 'c', 'roxana', 'patiño', 'nombre padre', ' apellido padre', 'No estan casados', 'jose', 'cruz', 'sasas', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes_catequesis`
--
ALTER TABLE `estudiantes_catequesis`
  ADD PRIMARY KEY (`estudiante_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes_catequesis`
--
ALTER TABLE `estudiantes_catequesis`
  MODIFY `estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
