<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cursos del Estudiante</title>

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/misCursosAlumno.js"></script>

</head>

<body>
	<div id="divTitulo">
        <header>
            <label>EVAA</label>
            <h1>Mis Cursos</h1>
            <label>Listado de Cursos de Estudiante </label>
        </header>
    </div>
            
    <div id="divContenido">
    	<br><label><strong>Filtrar Cursos</strong></label>
    	<br><input type="text" id="NomCurso" placeholder="Nombre Curso"> &nbsp; 
        <input id="Ano" onkeypress="return soloNumeros(event)" type="number" placeholder="Año">
        
		<div id="divTablaResultados">
			<!-- Lista la tabla con los cursos de estudiante -->
        </div>

    </div>
    
    <footer>
    </footer>
    
</body>
</html>