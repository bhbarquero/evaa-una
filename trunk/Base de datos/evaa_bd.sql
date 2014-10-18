-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2014 a las 20:30:10
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `evaa_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignaciones`
--

CREATE TABLE IF NOT EXISTS `tb_asignaciones` (
`AsignacionId` int(11) NOT NULL,
  `Descripccion` varchar(250) NOT NULL,
  `Archivo` longblob NOT NULL,
  `GrupoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
`CursoId` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_entregaasiganacion`
--

CREATE TABLE IF NOT EXISTS `tb_entregaasiganacion` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `AsignacionId` int(11) NOT NULL,
  `Archivo` longblob NOT NULL,
  `Nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estudiante`
--

CREATE TABLE IF NOT EXISTS `tb_estudiante` (
  `Cedula` varchar(10) NOT NULL,
  `FechaIngreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_grupo`
--

CREATE TABLE IF NOT EXISTS `tb_grupo` (
`GrupoId` int(11) NOT NULL,
  `Pofesor` varchar(10) NOT NULL,
  `CursoId` int(11) NOT NULL,
  `Anno` year(4) NOT NULL,
  `Ciclo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_matricula`
--

CREATE TABLE IF NOT EXISTS `tb_matricula` (
  `usuarioCoreo` varchar(30) NOT NULL,
  `GrupoId` int(11) NOT NULL,
  `Nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_persona`
--

CREATE TABLE IF NOT EXISTS `tb_persona` (
  `Cedula` varchar(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `TelefonoFijo` varchar(8) NOT NULL,
  `TelefonoMovil` varchar(8) NOT NULL,
  `CorreoUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_profesor`
--

CREATE TABLE IF NOT EXISTS `tb_profesor` (
  `Cedula` varchar(10) NOT NULL,
  `Sueldo` int(10) NOT NULL,
  `Especialdad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipousuario`
--

CREATE TABLE IF NOT EXISTS `tb_tipousuario` (
`TipoUsuarioId` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `TipoUsuarioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_asignaciones`
--
ALTER TABLE `tb_asignaciones`
 ADD PRIMARY KEY (`AsignacionId`);

--
-- Indices de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
 ADD PRIMARY KEY (`CursoId`);

--
-- Indices de la tabla `tb_estudiante`
--
ALTER TABLE `tb_estudiante`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `tb_grupo`
--
ALTER TABLE `tb_grupo`
 ADD PRIMARY KEY (`GrupoId`);

--
-- Indices de la tabla `tb_matricula`
--
ALTER TABLE `tb_matricula`
 ADD PRIMARY KEY (`usuarioCoreo`,`GrupoId`);

--
-- Indices de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `tb_profesor`
--
ALTER TABLE `tb_profesor`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `tb_tipousuario`
--
ALTER TABLE `tb_tipousuario`
 ADD PRIMARY KEY (`TipoUsuarioId`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
 ADD PRIMARY KEY (`CorreoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_asignaciones`
--
ALTER TABLE `tb_asignaciones`
MODIFY `AsignacionId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
MODIFY `CursoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_grupo`
--
ALTER TABLE `tb_grupo`
MODIFY `GrupoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_tipousuario`
--
ALTER TABLE `tb_tipousuario`
MODIFY `TipoUsuarioId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
