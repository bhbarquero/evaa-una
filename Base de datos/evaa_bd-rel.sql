-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.5.32 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para evaa_bd
CREATE DATABASE IF NOT EXISTS `evaa_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `evaa_bd`;


-- Volcando estructura para tabla evaa_bd.tb_asignaciones
CREATE TABLE IF NOT EXISTS `tb_asignaciones` (
  `AsignacionId` int(11) NOT NULL AUTO_INCREMENT,
  `Id_tipo` int(11) NOT NULL,
  `DescripcionA` varchar(250) NOT NULL,
  `Archivo` varchar(250) DEFAULT NULL,
  `GrupoId` int(11) NOT NULL,
  `FechaFin` date NOT NULL,
  `FechaInicio` date NOT NULL,
  PRIMARY KEY (`AsignacionId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_asignaciones: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_asignaciones` DISABLE KEYS */;
INSERT INTO `tb_asignaciones` (`AsignacionId`, `Id_tipo`, `DescripcionA`, `Archivo`, `GrupoId`, `FechaFin`, `FechaInicio`) VALUES
	(2, 4, 'Tarea 2', NULL, 1, '0000-00-00', '0000-00-00'),
	(3, 5, 'Taller 1', NULL, 1, '0000-00-00', '0000-00-00'),
	(4, 5, 'Taller 2', NULL, 1, '0000-00-00', '0000-00-00'),
	(5, 1, 'Examen 1', NULL, 1, '0000-00-00', '0000-00-00'),
	(6, 1, 'Examen 2', NULL, 1, '0000-00-00', '0000-00-00'),
	(7, 4, 'Tarea 1', NULL, 2, '0000-00-00', '0000-00-00'),
	(8, 4, 'Tarea 2', NULL, 2, '0000-00-00', '0000-00-00'),
	(9, 5, 'Taller 1', NULL, 2, '0000-00-00', '0000-00-00'),
	(10, 5, 'Taller 2', NULL, 2, '0000-00-00', '0000-00-00'),
	(11, 1, 'Examen 1', NULL, 2, '0000-00-00', '0000-00-00'),
	(12, 1, 'Examen 2', NULL, 2, '0000-00-00', '0000-00-00'),
	(13, 4, 'Tarea 1', NULL, 3, '0000-00-00', '0000-00-00'),
	(14, 4, 'Tarea 2', NULL, 3, '0000-00-00', '0000-00-00'),
	(15, 5, 'Taller 1', NULL, 3, '0000-00-00', '0000-00-00'),
	(16, 5, 'Taller 2', NULL, 3, '0000-00-00', '0000-00-00'),
	(17, 1, 'Examen 1', NULL, 3, '0000-00-00', '0000-00-00'),
	(18, 1, 'Examen 2', NULL, 3, '0000-00-00', '0000-00-00'),
	(19, 4, 'Tarea 1', NULL, 4, '0000-00-00', '0000-00-00'),
	(20, 4, 'Tarea 2', NULL, 4, '0000-00-00', '0000-00-00'),
	(21, 5, 'Taller 1', NULL, 4, '0000-00-00', '0000-00-00'),
	(22, 5, 'Taller 2', NULL, 4, '0000-00-00', '0000-00-00'),
	(23, 1, 'Examen 1', NULL, 4, '0000-00-00', '0000-00-00'),
	(24, 1, 'Examen 2', NULL, 4, '0000-00-00', '0000-00-00'),
	(25, 0, '', NULL, 0, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `tb_asignaciones` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_curso
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `CursoId` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(25) NOT NULL,
  PRIMARY KEY (`CursoId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_curso: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tb_curso` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_entregaasiganacion
CREATE TABLE IF NOT EXISTS `tb_entregaasiganacion` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `AsignacionId` int(11) NOT NULL,
  `Archivo` varchar(250) DEFAULT NULL,
  `Nota` int(11) DEFAULT NULL,
  UNIQUE KEY `unicaentrega` (`CorreoUsuario`,`AsignacionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_entregaasiganacion: ~26 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_entregaasiganacion` DISABLE KEYS */;
INSERT INTO `tb_entregaasiganacion` (`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES
	('bbarquero@gmail.com', 2, '../Archivos/2bbarquero@gmail.comStep.Up.All.In.2014.BDRip.LATiNO.XviD.Spanish.srt', NULL),
	('bbarquero@gmail.com', 3, NULL, 94),
	('bbarquero@gmail.com', 4, NULL, 92),
	('bbarquero@gmail.com', 5, NULL, 91),
	('bbarquero@gmail.com', 6, NULL, 82),
	('ctenorio@gmail.com', 3, NULL, 73),
	('ctenorio@gmail.com', 4, NULL, 95),
	('ctenorio@gmail.com', 5, NULL, 63),
	('ctenorio@gmail.com', 6, NULL, 91),
	('pobando@gmail.com', 3, NULL, 90),
	('pobando@gmail.com', 4, NULL, 74),
	('pobando@gmail.com', 5, NULL, 80),
	('pobando@gmail.com', 6, NULL, 74),
	('rvalverde@gmail.com', 3, NULL, 82),
	('rvalverde@gmail.com', 4, NULL, 88),
	('rvalverde@gmail.com', 5, NULL, 92),
	('rvalverde@gmail.com', 6, NULL, 81);
/*!40000 ALTER TABLE `tb_entregaasiganacion` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_estudiante
CREATE TABLE IF NOT EXISTS `tb_estudiante` (
  `Cedula` varchar(10) NOT NULL,
  `FechaIngreso` date NOT NULL,
  PRIMARY KEY (`Cedula`),
  CONSTRAINT `tb_estudiante_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `tb_persona` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_estudiante: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_estudiante` DISABLE KEYS */;
INSERT INTO `tb_estudiante` (`Cedula`, `FechaIngreso`) VALUES
	('111111111', '2011-01-11'),
	('222222222', '2012-02-12'),
	('333333333', '2013-03-13'),
	('444444444', '2014-04-14');
/*!40000 ALTER TABLE `tb_estudiante` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_grupo
CREATE TABLE IF NOT EXISTS `tb_grupo` (
  `GrupoId` int(11) NOT NULL AUTO_INCREMENT,
  `Pofesor` varchar(10) NOT NULL,
  `CursoId` int(11) NOT NULL,
  `Anno` int(4) NOT NULL,
  `Ciclo` varchar(3) NOT NULL,
  PRIMARY KEY (`GrupoId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_grupo: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_grupo` DISABLE KEYS */;
INSERT INTO `tb_grupo` (`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES
	(1, '555555555', 9, 2014, 'I'),
	(2, '666666666', 1, 2014, 'I'),
	(3, '777777777', 3, 2014, 'I'),
	(4, '888888888', 5, 2014, 'I'),
	(5, '666666666', 6, 2014, 'II'),
	(6, '999999999', 7, 2014, 'II'),
	(7, '666666666', 2, 2014, 'II'),
	(8, '555555555', 10, 2014, 'II'),
	(9, '555555555', 4, 2014, 'I'),
	(10, '555555555', 7, 2014, 'I'),
	(11, '555555555', 2, 2000, 'I'),
	(12, '', 0, 0, ''),
	(13, '555555555', 3, 2014, 'III'),
	(14, '555555555', 7, 6548, 'IV'),
	(15, '555555555', 6, 8545, 'IV');
/*!40000 ALTER TABLE `tb_grupo` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_matricula
CREATE TABLE IF NOT EXISTS `tb_matricula` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `GrupoId` int(11) NOT NULL,
  `NotaFinal` int(11) DEFAULT NULL,
  PRIMARY KEY (`CorreoUsuario`,`GrupoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_matricula: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_matricula` DISABLE KEYS */;
INSERT INTO `tb_matricula` (`CorreoUsuario`, `GrupoId`, `NotaFinal`) VALUES
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
/*!40000 ALTER TABLE `tb_matricula` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_persona
CREATE TABLE IF NOT EXISTS `tb_persona` (
  `Cedula` varchar(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `TelefonoFijo` varchar(8) NOT NULL,
  `TelefonoMovil` varchar(8) NOT NULL,
  `CorreoUsuario` varchar(30) NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_persona: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_persona` DISABLE KEYS */;
INSERT INTO `tb_persona` (`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES
	('111111111', 'Bernal', 'Barquero', '1991-01-11', 'Rivas', '2771-111', '8888-111', 'bbarquero@gmail.com'),
	('222222222', 'Randall', 'Valverde', '1992-02-12', 'San Andres', '2771-222', '8888-222', 'rvalverde@gmail.com'),
	('333333333', 'Carlos', 'Tenorio', '1993-03-13', 'Villa Ligia', '2771-333', '8888-333', 'ctenorio@gmail.com'),
	('444444444', 'Peter', 'Obando', '1994-04-14', 'Corral', '2771-444', '8888-444', 'pobando@gmail.com'),
	('555555555', 'Hairol', 'Romero', '1985-05-15', 'Ni Puta Idea', '27715555', '88885555', 'hromero@gmail.com'),
	('666666666', 'Johan', 'Espinoza', '1986-06-16', 'Ni Puta Idea', '2771-666', '8888-666', 'jespinoza@gmail.com'),
	('777777777', 'Alejandro', 'Flores', '1987-07-17', 'Ni Puta Idea', '2771-777', '8888-777', 'aflores@gmail.com'),
	('888888888', 'Randall', 'Morales', '1988-08-18', 'Ni Puta Idea', '2771-888', '8888-888', 'rmorales@gmail.com'),
	('999999999', 'Elvin', 'Rojas', '1989-09-19', 'Ni Puta Idea', '2771-999', '8888-999', 'erojas@gmail.com');
/*!40000 ALTER TABLE `tb_persona` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_porcentajeasignaciones
CREATE TABLE IF NOT EXISTS `tb_porcentajeasignaciones` (
  `Id_grupo` int(11) NOT NULL,
  `Id_tipoasignacion` int(11) NOT NULL,
  `Porcentaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_porcentajeasignaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_porcentajeasignaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_porcentajeasignaciones` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_profesor
CREATE TABLE IF NOT EXISTS `tb_profesor` (
  `Cedula` varchar(10) NOT NULL,
  `Especialidad` varchar(20) NOT NULL,
  PRIMARY KEY (`Cedula`),
  CONSTRAINT `tb_profesor_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `tb_persona` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_profesor: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_profesor` DISABLE KEYS */;
INSERT INTO `tb_profesor` (`Cedula`, `Especialidad`) VALUES
	('555555555', 'Bases de Datos'),
	('666666666', 'Matematica'),
	('777777777', 'Ingenieria'),
	('888888888', 'Programacion'),
	('999999999', 'Redes');
/*!40000 ALTER TABLE `tb_profesor` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_tipoasignacion
CREATE TABLE IF NOT EXISTS `tb_tipoasignacion` (
  `Id_tipoasignacion` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_tipoasignacion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_tipoasignacion: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_tipoasignacion` DISABLE KEYS */;
INSERT INTO `tb_tipoasignacion` (`Id_tipoasignacion`, `Descripcion`) VALUES
	(1, 'Examen'),
	(2, 'Exposición'),
	(3, 'Quiz'),
	(4, 'Tarea'),
	(5, 'Taller'),
	(6, 'Laboratorio'),
	(7, 'Foro');
/*!40000 ALTER TABLE `tb_tipoasignacion` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_tipousuario
CREATE TABLE IF NOT EXISTS `tb_tipousuario` (
  `TipoUsuarioId` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(25) NOT NULL,
  PRIMARY KEY (`TipoUsuarioId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_tipousuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_tipousuario` DISABLE KEYS */;
INSERT INTO `tb_tipousuario` (`TipoUsuarioId`, `Descripcion`) VALUES
	(1, 'Profesor'),
	(2, 'Estudiante');
/*!40000 ALTER TABLE `tb_tipousuario` ENABLE KEYS */;


-- Volcando estructura para tabla evaa_bd.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `CorreoUsuario` varchar(30) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `TipoUsuarioId` int(11) NOT NULL,
  PRIMARY KEY (`CorreoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla evaa_bd.tb_usuario: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`CorreoUsuario`, `Contrasena`, `TipoUsuarioId`) VALUES
	('', '', 0),
	('aflores@gmail.com', 'alejandro', 1),
	('bbarquero@gmail.com', 'bernal', 2),
	('ctenorio@gmail.com', 'carlos', 2),
	('erojas@gmail.com', 'elvin', 1),
	('hromero@gmail.com', 'hairol', 1),
	('jespinoza@gmail.com', 'johan', 1),
	('pobando@gmail.com', 'peter', 2),
	('rmorales@gmail.com', 'randall', 1),
	('rvalverde@gmail.com', 'randall', 2);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
