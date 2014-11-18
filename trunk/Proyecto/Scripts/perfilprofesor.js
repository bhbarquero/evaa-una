// JavaScript Document
$(document).ready(function(e) 
{
	var dir="";
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
	//carga info en el form
	consultarInfoP();
	
	
	$("#frmProfesor").validate(
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
				"especialidad":$("#Especialidad").val()
				
			};
			$.ajax({
			data:parametros,
			url:dir,
			type: "POST",
			dataType: 'json',

			success: function(response){
				if(response.TipoMensaje==1){
					dir="../PHP/editarProfesor.php";
					$('#Cedula').attr("readonly",true);
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
	
	
	function consultarInfoP()
	{
		$.ajax({
			url:"../PHP/consultarProfesor.php",
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
					$('#Especialidad').val(response.Especialidad);
					
					dir="../PHP/editarProfesor.php";
					$('#Cedula').attr("readonly",true);
				}
				if(response.TipoMensaje==2){
					$.mensajeError(response.Mensaje,4)
				}
				if(response.TipoMensaje==3){
					dir="../PHP/registrarProfesor.php";					
				}
				
			},
			error: function(response){
				$.mensajeError("Error cargar los datos:" + response.Mensaje, 4);
				}
		});
		
	};

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