// JavaScript Document
$(document).ready(function(e) {

	$("#btnRegistrar").click(function()
	{	
		var parametros={
				"correo":$("#CorreoUsuario").val(),
				"pass":$("#Contrasena").val(),
				"tipo":$("#TipoUsuarioId").val()
			};
			$("#divResultado").css("display","block");
		$.ajax({
			data:parametros,
			url: "../PHP/registrarUsuario.php",
			type: "POST",
			
			success: function(response){
				alert(response);
				document.location='../HTML/login.php';
			},
			error: function(response){
				alert(response);
				}
		});
	});
});