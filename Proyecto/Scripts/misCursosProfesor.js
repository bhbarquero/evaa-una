// JavaScript Document
$(document).ready(function(e) {
	Listar();
	
    $("#NomCurso").keyup(function(){
		Listar();
	});
	
	$("#Ano").keyup(function(){
		Listar();
	});
});

function Listar() {
	var parametros={ 
		"Nombre":$("#NomCurso").val(),
		"AnnoGrupo":$("#Ano").val()
	};
		
	$.ajax({
		data:parametros,
		url: "../PHP/listarCursosProfesor.php",
		type: "POST",

		success: function(response){
			$("#divTablaResultados").html(response);
		},
		error: function(response){
			alert(response);
		}
	}); 
}
