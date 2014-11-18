INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("1",'Calculo I');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("2",'Calculo II');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("3",'Progra I');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("4",'Progra II');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("5",'Progra III');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("6",'Estadistica');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("7",'Ingeniera');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("8",'Estructuras');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("9",'Bases de Datos I');
INSERT INTO `tb_curso`(`CursoId`, `Descripcion`) VALUES ("10",'Bases de Datos II');

INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("1",'555555555',"9","2014",'I');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("2",'666666666',"1","2014",'I');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("3",'777777777',"3","2014",'I');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("4",'888888888',"5","2014",'I');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("5",'666666666',"6","2014",'II');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("6",'999999999',"7","2014",'II');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("7",'666666666',"2","2014",'II');
INSERT INTO `tb_grupo`(`GrupoId`, `Pofesor`, `CursoId`, `Anno`, `Ciclo`) VALUES ("8",'555555555',"10","2014",'II'); 

INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('bbarquero@gmail.com',"1","98");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('rvalverde@gmail.com',"1","92");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('ctenorio@gmail.com',"1","87");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('pobando@gmail.com',"1","97");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('bbarquero@gmail.com',"2","88");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('rvalverde@gmail.com',"2","81");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('ctenorio@gmail.com',"2","91");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('bbarquero@gmail.com',"3","80");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('rvalverde@gmail.com',"3","82");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('ctenorio@gmail.com',"3","89");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('pobando@gmail.com',"3","99");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('rvalverde@gmail.com',"4","74");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('ctenorio@gmail.com',"4","85");
INSERT INTO `tb_matricula`(`CorreoUsuario`, `GrupoId`, `Nota`) VALUES ('pobando@gmail.com',"4","95");

INSERT INTO `tb_estudiante`(`Cedula`, `FechaIngreso`) VALUES ("111111111","2011-01-11");
INSERT INTO `tb_estudiante`(`Cedula`, `FechaIngreso`) VALUES ("222222222","2012-02-12");
INSERT INTO `tb_estudiante`(`Cedula`, `FechaIngreso`) VALUES ("333333333","2013-03-13");
INSERT INTO `tb_estudiante`(`Cedula`, `FechaIngreso`) VALUES ("444444444","2014-04-14");

INSERT INTO `tb_profesor`(`Cedula`, `Sueldo`, `Especialidad`) VALUES ("555555555","500.000",'Bases de Datos');
INSERT INTO `tb_profesor`(`Cedula`, `Sueldo`, `Especialidad`) VALUES ("666666666","600.000",'Matematica');
INSERT INTO `tb_profesor`(`Cedula`, `Sueldo`, `Especialidad`) VALUES ("777777777","700.000",'Ingenieria');
INSERT INTO `tb_profesor`(`Cedula`, `Sueldo`, `Especialidad`) VALUES ("888888888","800.000",'Programacion');
INSERT INTO `tb_profesor`(`Cedula`, `Sueldo`, `Especialidad`) VALUES ("999999999","900.000",'Redes');

INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("111111111",'Bernal','Barquero',"1991-01-11",'Rivas','2771-1111','8888-1111','bbarquero@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("222222222",'Randall','Valverde',"1992-02-12",'San Andres','2771-2222','8888-2222','rvalverde@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("333333333",'Carlos','Tenorio',"1993-03-13",'Villa Ligia','2771-3333','8888-3333','ctenorio@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("444444444",'Peter','Obando',"1994-04-14",'Corral','2771-4444','8888-4444','pobando@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("555555555",'Hairol','Romero',"1985-05-15",'Ni Puta Idea','2771-5555','8888-5555','hromero@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("666666666",'Johan','Sepaputas',"1986-06-16",'Ni Puta Idea','2771-6666','8888-6666','jsepaputas@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("777777777",'Alejandro','Flores',"1987-07-17",'Ni Puta Idea','2771-7777','8888-7777','aflores@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("888888888",'Randall','sepaputa',"1988-08-18",'Ni Puta Idea','2771-8888','8888-8888','rsepaputa@gmail.com');
INSERT INTO `tb_persona`(`Cedula`, `Nombre`, `Apellido`, `FechaNacimiento`, `Direccion`, `TelefonoFijo`, `TelefonoMovil`, `CorreoUsuario`) VALUES ("999999999",'Elvin','Rojas',"1989-09-19",'Ni Puta Idea','2771-9999','8888-9999','erojas@gmail.com');

INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("1",'Tarea 1',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("2",'Tarea 2',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("3",'Taller 1',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("4",'Taller 2',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("5",'Examen 1',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("6",'Examen 2',NULL,"1");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("7",'Tarea 1',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("8",'Tarea 2',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("9",'Taller 1',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("10",'Taller 2',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("11",'Examen 1',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("12",'Examen 2',NULL,"2");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("13",'Tarea 1',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("14",'Tarea 2',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("15",'Taller 1',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("16",'Taller 2',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("17",'Examen 1',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("18",'Examen 2',NULL,"3");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("19",'Tarea 1',NULL,"4");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("20",'Tarea 2',NULL,"4");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("21",'Taller 1',NULL,"4");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("22",'Taller 2',NULL,"4");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("23",'Examen 1',NULL,"4");
INSERT INTO `tb_asignaciones`(`AsignacionId`, `DescripccionA`, `Archivo`, `GrupoId`) VALUES ("24",'Examen 2',NULL,"4");

INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"1",NULL,"94");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"1",NULL,"82");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"1",NULL,"83");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"1",NULL,"100");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"2",NULL,"72");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"2",NULL,"88");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"2",NULL,"90");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"2",NULL,"54");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"3",NULL,"94");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"3",NULL,"82");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"3",NULL,"73");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"3",NULL,"90");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"4",NULL,"92");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"4",NULL,"88");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"4",NULL,"95");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"4",NULL,"74");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"5",NULL,"91");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"5",NULL,"92");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"5",NULL,"63");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"5",NULL,"80");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('bbarquero@gmail.com',"6",NULL,"82");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('rvalverde@gmail.com',"6",NULL,"81");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('ctenorio@gmail.com',"6",NULL,"91");
INSERT INTO `tb_entregaasiganacion`(`CorreoUsuario`, `AsignacionId`, `Archivo`, `Nota`) VALUES ('pobando@gmail.com',"6",NULL,"74");

INSERT INTO `tb_tipousuario`(`TipoUsuarioId`, `Descripcion`) VALUES ("1",'Profesor');
INSERT INTO `tb_tipousuario`(`TipoUsuarioId`, `Descripcion`) VALUES ("2",'Estudiante');

INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('hromero@gmail.com', "hairol","1");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('jespinoza@gmail.com', "johan","1");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('aflores@gmail.com', "alejandro","1");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('rmorales@gmail.com', "randall","1");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('erojas@gmail.com', "elvin","1");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('bbarquero@gmail.com', "bernal","2");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('rvalverde@gmail.com', "randall","2");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('ctenorio@gmail.com', "carlos","2");
INSERT INTO `tb_usuario`(`CorreoUsuario`, `Contraseña`, `TipoUsuarioId`) VALUES ('pobando@gmail.com', "peter","2");

INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("1",'Examen');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("2",'Exposición');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("3",'Quiz');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("4",'Tarea');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("5",'Taller');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("6",'Laboratorio');
INSERT INTO `tb_tipoasignacion`(`Id`, `Descripcion`) VALUES ("7",'Foro');














