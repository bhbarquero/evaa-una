// JavaScript Document
$(document).ready(function(e){
	
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
    $("#btnEntrar").click(function(){
		
		if($('#frmLogin').valid()){
			var parametros=
				{
					"correo":$("#correo").val(),
					"pass":$("#pass").val()
				};
				
			$.ajax({
			data:parametros,
			url:"../PHP/validarUsuario.php",
			type: "POST",
			dataType: 'json',
			success: function(data){
				if(data.TipoMensaje==1)
					if(data.TipoUsuario==1)
						document.location='../HTML/misCursosProfesor.php';
					else
						document.location='../HTML/misCursosAlumno.php';
				else
					$.mensajeError(data.Mensaje, 4);
			},
			error: function(data){
				$.mensajeError("Error al validar el usario", 4);
				}
			});
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