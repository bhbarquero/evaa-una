// JavaScript Document
function funSeleccionar(correo) {
	document.getElementById('cedula').value=correo;
	document.getElementById('btnBoton').style.display='block';
	document.getElementById('txtNota').style.display='block';
	
}

$(document).ready(function(e) {
    
	var parametros=
			{
				"asignacionId":$('#asignacionId').val(),
			};

		$.ajax({
			data:parametros,
			url:"../PHP/listarEntrega.php",
			type: "POST",

			success: function(response){
				$('#divResultado').html(response);
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
	
	$('#btnBoton').click(function(e) {
		var parametros=
			{
				"cedula":$('#cedula').val(),
				"nota":$('#txtNota').val(),
				"asignacionid":$('#asignacionId').val(),
			};

		$.ajax({
			data:parametros,
			url:"../PHP/calificarAsignacion.php",
			type: "POST",
			dataType: 'json',

			success: function(response){
				alert(response.Mensaje)
				document.location.reload(true);
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
    });
	
	
	

function funSeleccionar(a) {
  alert(a);
}


	
	
});