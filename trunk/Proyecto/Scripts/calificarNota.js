// JavaScript Document
function funSeleccionar(correo) {
	document.getElementById('cedula').value=correo;
	document.getElementById('diAcciones').style.display='block';
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
				$('#divTablaResultados').html(response);
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
				if(response.TipoMensaje==1){
				$.mensajeExito(response.Mensaje,4);
				setTimeout(function(){document.location.reload(true);},4000);
				}
				else{
				$.mensajeError("Error desconocido" +response.Mensaje,4);}
			},
			error: function(response){		
				$.mensajeError("Error desconocido"+response.Mensaje,4);
				}
		});
    });
	
	
	

function funSeleccionar(a) {
  alert(a);
}


	
	
});

$.mensajeExito = function(mensaje, segundos){
		$(".msgContent").toggleClass("activeExito");
		$("#mensaje").html(mensaje);
		  
		setTimeout(function(){
			$(".msgContent").removeClass("activeExito");
		},segundos*1000);
	};

$.mensajeError = function(mensaje, segundos){
		$(".msgContent").toggleClass("activeError");
		$("#mensaje").html(mensaje);
		
		setTimeout(function(){
			$(".msgContent").removeClass("activeError");
		},segundos*1000);
	};