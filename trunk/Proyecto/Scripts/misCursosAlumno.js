// JavaScript Document
$(document).ready(function(e) {
	Listar();
	
    $("#NomCurso").keyup(function(){
		Listar();
	});
});

function Listar() {
	var parametros={ 
		"Nombre":$("#NomCurso").val()
	};
		
	$.ajax({
		data:parametros,
		url: "../PHP/listarCursosAlumno.php",
		type: "POST",
		
		success: function(response){
			$("#divTablaResultados").html(response);
		},
		error: function(response){
			alert(response);
		}
	}); 
}
