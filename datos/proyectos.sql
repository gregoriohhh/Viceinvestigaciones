-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2014 a las 12:19:38
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `viceinvestigaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(5) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `investigador` varchar(64) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `investigador`, `fecha`, `duracion`) VALUES
(620, 'Estudio de caracterizaci??n de los estudiantes emprendedores de la Universidad del Quindio, modalidad presencial, a??o 2013.			', 'Hugo Osorio Ceballos', '2013-01-01', 12),
(621, 'Desarrollo de un sistema efectivo y apropiado de estimaci??n del volumen de tejido activo cerebral para el mejoramiento de los resultados terap??uticos en pacientes con enfermedades de Parkinson intervenidos quir??rgicamente.		', 'Alvaro Angel Orozco Gutierrez', '2013-03-27', 36),
(622, 'Integraci??n de medios de comunicaci??n y TIC en el desarrollo de los espacios acad??micos de un grupo de docentes de la Universidad del Quindio.	', 'Bibiana Magaly Mejia Escobar.', '2013-02-11', 18),
(623, 'Efecto de un programa de ejercicio fisico sobre los niveles de LCAT, CETP Y las subfracciones de HDL2 y HDL3, en estudiantes de Medicina de la Universidad del Quindio.				', 'Diana Maria Garcia', '2013-02-12', 12),
(624, 'El t??tulo del correo', 'Jos?? Humberto Castillo Chamorro', '2013-02-18', 12),
(625, 'Fabricaci??n y caracterizaci??n de un prototipo de supercapacitor flexible basado en carb??n activado obtenido de la guadua.', 'Hernando Ariza Calderon', '2013-03-14', 18),
(626, 'Implementaci??n de un sistema de medida de susceptibilidad magn??tica.				', 'Hernando Correa Gallego', '2013-04-15', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
