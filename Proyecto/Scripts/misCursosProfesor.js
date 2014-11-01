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
		beforeSend: function(){
			$("#divTablaResultados").html("<br/>Cargando...");
		},
		success: function(response){
			$("#divTablaResultados").html(response);
		},
		error: function(response){
			alert(response);
		}
	}); 
	
	function soloNumeros(e)
    	{
    		var keynum = window.event ? window.event.keyCode : e.which;
    		if ((keynum == 8) || (keynum == 46))
    			return true;
    		return /\d/.test(String.fromCharCode(keynum));
    	}
}
