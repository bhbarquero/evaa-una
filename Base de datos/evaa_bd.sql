-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2014 a las 01:56:31
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

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
  `DescripccionA` varchar(250) NOT NULL,
  `Archivo` longblob,
  `GrupoId` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `tb_asignaciones`
--

INSERT INTO `tb_asignaciones` (`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES
(1, 'Tarea 1', NULL, 1),
(2, 'Tarea 2', NULL, 1),
(3, 'Taller 1', NULL, 1),
(4, 'Taller 2', NULL, 1),
(5, 'Examen 1', NULL, 1),
(6, 'Examen 2', NULL, 1),
(7, 'Tarea 1', NULL, 2),
(8, 'Tarea 2', NULL, 2),
(9, 'Taller 1', NULL, 2),
(10, 'Taller 2', NULL, 2),
(11, 'Examen 1', NULL, 2),
(12, 'Examen 2', NULL, 2),
(13, 'Tarea 1', NULL, 3),
(14, 'Tarea 2', NULL, 3),
(15, 'Taller 1', NULL, 3),
(16, 'Taller 2', NULL, 3),
(17, 'Examen 1', NULL, 3),
(18, 'Examen 2', NULL, 3),
(19, 'Tarea 1', NULL, 4),
(20, 'Tarea 2', NULL, 4),
(21, 'Taller 1', NULL, 4),
(22, 'Taller 2', NULL, 4),
(23, 'Examen 1', NULL, 4),
(24, 'Examen 2', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
`CursoId` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tb_curso`
--

INSERT INTO `tb_curso` (`CursoId`, `Descripcion`) VALUES
(1, 'Calculo I'),
(2, 'Calculo II'),
(3, 'Progra I'),
(4, 'Progra II'),
(5, 'Progra III'),
(6, 'Estadistica'),
(7, 'Ingeniera'),
(8, 'Estructuras'),
(9, 'Bases Datos I'),
(10, 'Bases Datos II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_entregaasiganacion`
--

CREATE TABLE IF NOT EXISTS `tb_entregaasiganacion` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `AsignacionId` int(11) NOT NULL,
  `Archivo` longblob,
  `Nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_entregaasiganacion`
--

INSERT INTO `tb_entregaasiganacion` (`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES
('bbarquero@gmail.com', 1, NULL, 94),
('rvalverde@gmail.com', 1, NULL, 82),
('ctenorio@gmail.com', 1, NULL, 83),
('pobando@gmail.com', 1, NULL, 100),
('bbarquero@gmail.com', 2, NULL, 72),
('rvalverde@gmail.com', 2, NULL, 88),
('ctenorio@gmail.com', 2, NULL, 90),
('pobando@gmail.com', 2, NULL, 54),
('bbarquero@gmail.com', 3, NULL, 94),
('rvalverde@gmail.com', 3, NULL, 82),
('ctenorio@gmail.com', 3, NULL, 73),
('pobando@gmail.com', 3, NULL, 90),
('bbarquero@gmail.com', 4, NULL, 92),
('rvalverde@gmail.com', 4, NULL, 88),
('ctenorio@gmail.com', 4, NULL, 95),
('pobando@gmail.com', 4, NULL, 74),
('bbarquero@gmail.com', 5, NULL, 91),
('rvalverde@gmail.com', 5, NULL, 92),
('ctenorio@gmail.com', 5, NULL, 63),
('pobando@gmail.com', 5, NULL, 80),
('bbarquero@gmail.com', 6, NULL, 82),
('rvalverde@gmail.com', 6, NULL, 81),
('ctenorio@gmail.com', 6, NULL, 91),
('pobando@gmail.com', 6, NULL, 74);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estudiante`
--

CREATE TABLE IF NOT EXISTS `tb_estudiante` (
  `Cedula` varchar(10) NOT NULL,
  `FechaIngreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_estudiante`
--

INSERT INTO `tb_estudiante` (`Cedula`, `FechaIngreso`) VALUES
('111111111', '2011-01-11'),
('222222222', '2012-02-12'),
('333333333', '2013-03-13'),
('444444444', '2014-04-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_grupo`
--

CREATE TABLE IF NOT EXISTS `tb_grupo` (
`GrupoId` int(11) NOT NULL,
  `Pofesor` varchar(10) NOT NULL,
  `CursoId` int(11) NOT NULL,
  `Anno` int(4) NOT NULL,
  `Ciclo` varchar(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tb_grupo`
--

INSERT INTO `tb_grupo` (`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES
(1, '555555555', 9, 2014, 'I'),
(2, '666666666', 1, 2014, 'I'),
(3, '777777777', 3, 2014, 'I'),
(4, '888888888', 5, 2014, 'I'),
(5, '666666666', 6, 2014, 'II'),
(6, '999999999', 7, 2014, 'II'),
(7, '666666666', 2, 2014, 'II'),
(8, '555555555', 10, 2014, 'II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_matricula`
--

CREATE TABLE IF NOT EXISTS `tb_matricula` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `GrupoId` int(11) NOT NULL,
  `Nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_matricula`
--

INSERT INTO `tb_matricula` (`CorreoUsuario`, `GrupoId`, `Nota`) VALUES
('bbarquero@gmail.com', 1, 98),
('bbarquero@gmail.com', 2, 88),
('bbarquero@gmail.com', 3, 80),
('ctenorio@gmail.com', 1, 87),
('ctenorio@gmail.com', 2, 91),
('ctenorio@gmail.com', 3, 89),
('ctenorio@gmail.com', 4, 85),
('pobando@gmail.com', 1, 97),
('pobando@gmail.com', 3, 99),
('pobando@gmail.com', 4, 95),
('rvalverde@gmail.com', 1, 92),
('rvalverde@gmail.com', 2, 81),
('rvalverde@gmail.com', 3, 82),
('rvalverde@gmail.com', 4, 74);

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

--
-- Volcado de datos para la tabla `tb_persona`
--

INSERT INTO `tb_persona` (`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES
('111111111', 'Bernal', 'Barquero', '1991-01-11', 'Rivas', '2771-111', '8888-111', 'bbarquero@gmail.com'),
('222222222', 'Randall', 'Valverde', '1992-02-12', 'San Andres', '2771-222', '8888-222', 'rvalverde@gmail.com'),
('333333333', 'Carlos', 'Tenorio', '1993-03-13', 'Villa Ligia', '2771-333', '8888-333', 'ctenorio@gmail.com'),
('444444444', 'Peter', 'Obando', '1994-04-14', 'Corral', '2771-444', '8888-444', 'pobando@gmail.com'),
('555555555', 'Hairol', 'Romero', '1985-05-15', 'Ni Puta Idea', '2771-555', '8888-555', 'hromero@gmail.com'),
('666666666', 'Johan', 'Espinoza', '1986-06-16', 'Ni Puta Idea', '2771-666', '8888-666', 'jespinoza@gmail.com'),
('777777777', 'Alejandro', 'Flores', '1987-07-17', 'Ni Puta Idea', '2771-777', '8888-777', 'aflores@gmail.com'),
('888888888', 'Randall', 'Morales', '1988-08-18', 'Ni Puta Idea', '2771-888', '8888-888', 'rmorales@gmail.com'),
('999999999', 'Elvin', 'Rojas', '1989-09-19', 'Ni Puta Idea', '2771-999', '8888-999', 'erojas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_profesor`
--

CREATE TABLE IF NOT EXISTS `tb_profesor` (
  `Cedula` varchar(10) NOT NULL,
  `Sueldo` int(10) NOT NULL,
  `Especialidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_profesor`
--

INSERT INTO `tb_profesor` (`Cedula`, `Sueldo`, `Especialidad`) VALUES
('555555555', 500, 'Bases de Datos'),
('666666666', 600, 'Matematica'),
('777777777', 700, 'Ingenieria'),
('888888888', 800, 'Programacion'),
('999999999', 900, 'Redes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipousuario`
--

CREATE TABLE IF NOT EXISTS `tb_tipousuario` (
`TipoUsuarioId` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tb_tipousuario`
--

INSERT INTO `tb_tipousuario` (`TipoUsuarioId`, `Descripcion`) VALUES
(1, 'Profesor'),
(2, 'Estudiante');

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
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES
('aflores@gmail.com', 'alejandro', 1),
('bbarquero@gmail.com', 'bernal', 2),
('ctenorio@gmail.com', 'carlos', 2),
('erojas@gmail.com', 'elvin', 1),
('hromero@gmail.com', 'hairol', 1),
('jespinoza@gmail.com', 'johan', 1),
('pobando@gmail.com', 'peter', 2),
('rmorales@gmail.com', 'randall', 1),
('rvalverde@gmail.com', 'randall', 2);

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
 ADD PRIMARY KEY (`CorreoUsuario`,`GrupoId`);

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
MODIFY `AsignacionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
MODIFY `CursoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tb_grupo`
--
ALTER TABLE `tb_grupo`
MODIFY `GrupoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tb_tipousuario`
--
ALTER TABLE `tb_tipousuario`
MODIFY `TipoUsuarioId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
