// JavaScript Document

$(document).ready(function(e) 
{

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
	//Consulta de correo para usuario
	consultarInfoA();
	
	var dir="";
	
	//Guarda o Edita la persona	
	$("#frmAlumno").validate(
	{
		submitHandler: function(form){
			var parametros=
			{
				"cedula":$("#Cedula").val(),
				"nombre":$("#Nombre").val(),
				"apellido":$("#Apellido").val(),
				"fechanacimiento":$("#FechaNacimiento").val(),
				"direccion":$("#Direccion").val(),
				"telefonofijo":$("#TelefonoFijo").val(),
				"telefonomovil":$("#TelefonoMovil").val(),
				"fechaingreso":$("#FechaIngreso").val()
			};
		
			
			$.ajax({
				data:parametros,
				url:dir,
				type: "POST",
				dataType: 'json',
	
				success: function(response){
					if(response.TipoMensaje==1){
						dir="../PHP/editarAlumno.php";
						$.mensajeExito(response.Mensaje,4);
					}
					else
						$.mensajeError(response.Mensaje,4);
				},
				error: function(response){
					$.mensajeError("Error al guardar el perfil. "+response.Mensaje,4);
					}
			});
		}
		
	});
	

function consultarInfoA(){
	$.ajax({
			url:"../PHP/ConsultarAlumno.php",
			type: "POST",
			dataType: 'json',

			success: function(response){
				
				if(response.TipoMensaje==1){
					$('#Cedula').val(response.Cedula);
					$('#Nombre').val(response.Nombre);
					$('#Apellido').val(response.Apellido);
					$('#FechaNacimiento').val(response.FechaNac);
					$('#Direccion').val(response.Direccion);
					$('#TelefonoFijo').val(response.TelefonoFijo);
					$('#TelefonoMovil').val(response.TelefonoMovil);
					$('#FechaIngreso').val(response.FechaIngreso);
					
					dir="../PHP/editarAlumno.php";
				}
				if(response.TipoMensaje==2){
					$.mensajeError(response.Mensaje,4)
				}
				if(response.TipoMensaje==3){
					dir="../PHP/registrarAlumno.php";					
				}
			},
			error: function(response){	
				$.mensajeError("Error cargar los datos:" + response.Mensaje, 4);
				}
			
		});
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