// JavaScript Document
$(document).ready(function(e) {

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	$("#btnRegistrar").click(function()
	{	
		if($('#frmResgistro').valid()){
			if($("#Contrasena").val().length>5){
				if($("#Contrasena").val()==$("#ReContrasena").val()){
					
					var parametros={
							"correo":$('#CorreoUsuario').val(),
							"pass":$('#Contrasena').val(),
							"tipo":$('#TipoUsuarioId').val()
						};
						alert(parametros["tipo"]);
					$.ajax({
						data:parametros,
						url: "../PHP/registrarUsuario.php",
						type: "POST",
						
						success: function(response){
							var r=response.split(",");
							if(r[0]==1)
								$.mensajeExito(r[1], 4);
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
			else
			$.mensajeError("La contraseña no cumple con el tamaño mínimo", 4);
				
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
