// JavaScript Document
$(document).ready(function(e) {

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

	$("#btnRegistrar").click(function()
	{	//if($("#CorreoUsuario").val()!="" && $("#Contrasena").val()!="" && $("#TipoUsuarioId").val()!=""){
		if($('#frmResgistro').valid()){
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
						var r=response.split(",");
						$.mensajeError(r[0], 4);
						}
				});
			}
			else
				$.mensajeError("Las contraseñas no coinciden", 4);
		}

	});
	
});
