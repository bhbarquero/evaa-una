// JavaScript Document
$(document).ready(function(e) {

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

		$('#frmResgistro').validate({
        
        	submitHandler: function(form){
					
					var parametros={
							"correo":$('#CorreoUsuario').val(),
							"pass":$('#Contrasena').val(),
							"tipo":$('#TipoUsuarioId').val()
						};
						
				if($('#Contrasena').val()==$('#ReContrasena').val()){
					$.ajax({
						data:parametros,
						url: "../PHP/registrarUsuario.php",
						type: "POST",
						
						success: function(response){
							var r=response.split(",");
							if(r[0]==1){
								$.mensajeExito(r[1], 4);
								setTimeout(function(){
								document.location='../HTML/login.php';
								},2000);
							}
							else
								$.mensajeError(r[1], 4);
						},
						error: function(response){
							$.mensajeError(response, 4);
							}
					});
				}
				else
				$.mensajeError("Las contraseñas no coinciden", 4);
		}

	});
	
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
