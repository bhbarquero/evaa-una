<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cursos del Profesor</title>

<script src="../Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/misCursosProfesor.js"></script>

</head>

<body>
	<div id="divTitulo">
        <header>
            <label>EVAA</label>
            <h1>Mis Cursos</h1>
            <label>Listado de Cursos de Profesor </label>
        </header>
    </div>
            
	<script>
        function soloNumeros(e)
    	{
    		var keynum = window.event ? window.event.keyCode : e.which;
    		if ((keynum == 8) || (keynum == 46))
    			return true;
    		return /\d/.test(String.fromCharCode(keynum));
    	}
     </script>

    <div id="divContenido">
    	<br><label><strong>Filtrar Cursos</strong></label>
    	<br><input type="text" id="NomCurso" placeholder="Nombre Curso"> &nbsp; 
        <input id="Ano" onkeypress="return soloNumeros(event)" type="number" placeholder="Año">
        
		<div id="divTablaResultados">
			<!-- Lista la tabla con los cursos del Profesor -->
        </div>
        
		<br><input type="button" value="Nuevo Curso" onClick=" window.location.href='../HTML/misCursosAlumno.php' ">        

    </div>
    
    <footer>
    </footer>
    
</body>
</html>