-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2013 a las 00:17:31
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sabedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE IF NOT EXISTS `centro` (
  `id_centro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `coordenadas` varchar(45) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id_centro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre`, `direccion`, `coordenadas`, `telefono`) VALUES
(1, 'centro de salud las palmas', 'Las palmas, sona', '', '66232323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `cordenadas` varchar(45) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `centro_id_centro` int(11) NOT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `fk_contacto_centro1_idx` (`centro_id_centro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `direccion`, `cordenadas`, `cedula`, `centro_id_centro`) VALUES
(1, 'Rosa', 'Perez', 'Las palmas, sona', '8.722218, -81.768923', '9-9999', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE IF NOT EXISTS `control` (
  `id_control` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_centro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nmeses` int(11) NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `contacto_id_contacto` int(11) NOT NULL,
  PRIMARY KEY (`id_control`),
  KEY `fk_control_contacto1_idx` (`contacto_id_contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id_control`, `id_paciente`, `id_centro`, `fecha`, `nmeses`, `descripcion`, `contacto_id_contacto`) VALUES
(1, 1, 1, '2013-10-08', 2, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE IF NOT EXISTS `dispositivo` (
  `id_dispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) CHARACTER SET latin1 NOT NULL,
  `inteligente` int(1) NOT NULL DEFAULT '1',
  `contacto_id_contacto` int(11) NOT NULL,
  PRIMARY KEY (`id_dispositivo`),
  UNIQUE KEY `numero_UNIQUE` (`numero`),
  KEY `fk_dispositivo_contacto1_idx` (`contacto_id_contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`id_dispositivo`, `numero`, `inteligente`, `contacto_id_contacto`) VALUES
(1, '6111111', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_actividad`
--

CREATE TABLE IF NOT EXISTS `log_actividad` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `coordenadas` varchar(45) CHARACTER SET latin1 NOT NULL,
  `tipo_alerta` int(1) NOT NULL,
  `centro_id_centro` int(11) NOT NULL,
  `dispositivo_id_dispositivo` int(11) NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY `fk_log_actividad_centro1_idx` (`centro_id_centro`),
  KEY `fk_log_actividad_dispositivo1_idx` (`dispositivo_id_dispositivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_contacto_centro1` FOREIGN KEY (`centro_id_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `fk_control_contacto1` FOREIGN KEY (`contacto_id_contacto`) REFERENCES `contacto` (`id_contacto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `fk_dispositivo_contacto1` FOREIGN KEY (`contacto_id_contacto`) REFERENCES `contacto` (`id_contacto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_actividad`
--
ALTER TABLE `log_actividad`
  ADD CONSTRAINT `fk_log_actividad_centro1` FOREIGN KEY (`centro_id_centro`) REFERENCES `centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_log_actividad_dispositivo1` FOREIGN KEY (`dispositivo_id_dispositivo`) REFERENCES `dispositivo` (`id_dispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
