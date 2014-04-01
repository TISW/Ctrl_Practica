-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2014 a las 04:02:24
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_ctrl_practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `Persona_rut` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Persona_rut`),
  KEY `fk_Alumnos_Persona1_idx` (`Persona_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `idBitacora` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Info_Practica_Alumnos_idInfo_Practica_Alumnos` int(10) unsigned NOT NULL,
  `fecha_ingreso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idBitacora`),
  KEY `fk_Bitacora_Info_Practica_Alumnos1_idx` (`Info_Practica_Alumnos_idInfo_Practica_Alumnos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
  `idConvenio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estado_convenio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_comienzo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_termino` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idConvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `idEmpresas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Convenio_idConvenio` int(10) unsigned NOT NULL,
  `nombre_empresa` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rut` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contacto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idEmpresas`),
  KEY `fk_Empresas_Convenio1_idx` (`Convenio_idConvenio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`rut`, `nombre`, `correo`, `telefono`) VALUES
('123456789-2', 'sad', 'asd', 'asd'),
('18.108.559-2', 'Ruben Eduardo Tejeda Roa', 'rtejeda@alumnos.ubiobio.cl', '+569 91223304');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica_alumnos`
--

CREATE TABLE IF NOT EXISTS `practica_alumnos` (
  `idPractica_Alumnos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Alumnos_PersonaRut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `Profesor_PersonaRut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `Empresas_idEmpresas` int(10) unsigned NOT NULL,
  `tipo_practica` int(11) NOT NULL,
  `estado_informe` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_evaluacionEmpresa` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_aprobacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `evaluacion_empresa` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `informacion_practica` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_practica` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `estado_practica` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idPractica_Alumnos`,`Alumnos_PersonaRut`,`Profesor_PersonaRut`),
  KEY `fk_Info_Practica_Alumnos_Empresas1_idx` (`Empresas_idEmpresas`),
  KEY `fk_Practica_Alumnos_Alumnos1_idx` (`Alumnos_PersonaRut`),
  KEY `fk_Practica_Alumnos_Profesor1_idx` (`Profesor_PersonaRut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `Persona_rut` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Persona_rut`),
  KEY `fk_Profesor_Persona1_idx` (`Persona_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Persona_rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Persona_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Persona_rut`, `password`, `role`, `create`, `modified`, `estado`) VALUES
('18.108.559-2', '123456', '', '2014-03-30 16:18:05', '2014-03-30 16:18:05', 'activo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_Alumnos_Persona1` FOREIGN KEY (`Persona_rut`) REFERENCES `persona` (`rut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `fk_Bitacora_Info_Practica_Alumnos1` FOREIGN KEY (`Info_Practica_Alumnos_idInfo_Practica_Alumnos`) REFERENCES `practica_alumnos` (`idPractica_Alumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_Empresas_Convenio1` FOREIGN KEY (`Convenio_idConvenio`) REFERENCES `convenio` (`idConvenio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `practica_alumnos`
--
ALTER TABLE `practica_alumnos`
  ADD CONSTRAINT `fk_Info_Practica_Alumnos_Empresas1` FOREIGN KEY (`Empresas_idEmpresas`) REFERENCES `empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Practica_Alumnos_Alumnos1` FOREIGN KEY (`Alumnos_PersonaRut`) REFERENCES `alumnos` (`Persona_rut`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Practica_Alumnos_Profesor1` FOREIGN KEY (`Profesor_PersonaRut`) REFERENCES `profesor` (`Persona_rut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_Profesor_Persona1` FOREIGN KEY (`Persona_rut`) REFERENCES `persona` (`rut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_Persona1` FOREIGN KEY (`Persona_rut`) REFERENCES `persona` (`rut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
