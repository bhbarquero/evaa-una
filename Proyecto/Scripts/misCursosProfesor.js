// JavaScript Document
$(document).ready(function(e) {
	Listar();

    $("#NomCurso").keyup(function(){
		Listar();
	});
	
	$('#btnFiltrar').keyup(function(){
		Listar();
	});
	
	$("#Ano").keydown(function (e) {
        soloNumeros(e);
    });
});

function soloNumeros(e)
{
	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105))
            e.preventDefault();
		else
			Listar();
        
}
	
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
			$("#divTablaResultados").html("<br/><h2 class='content-subhead'>Cargando...</br>");
		},
		success: function(response){
			$("#divTablaResultados").html(response);
		},
		error: function(response){
			alert(response);
		}
	}); 
	
}
