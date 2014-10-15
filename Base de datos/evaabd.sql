-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2014 a las 22:46:05
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `evaabd`
--
CREATE DATABASE IF NOT EXISTS `evaabd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evaabd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Id de usuario',
  `usuario` varchar(40) NOT NULL COMMENT 'nombre de usuario',
  `contrasena` varchar(40) NOT NULL COMMENT 'contraseña de usuario',
  `tipo` int(1) NOT NULL COMMENT 'tipo de usuario',
  `estado` varchar(1) NOT NULL DEFAULT 'A' COMMENT 'estado de usuario',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
