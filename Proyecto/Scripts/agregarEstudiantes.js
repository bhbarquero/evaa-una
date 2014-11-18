$(document).ready(function(e) {
    
	$("#frmAgregar").validate(
	{
		submitHandler: function(form){
        var parametros=
			{
				"grupoid":$('#GrupoId').val(),
				"correo":$('#Correo').val()
			};

		$.ajax({
			data:parametros,
			url:"../PHP/agregarMatricula.php",
			type: "POST",
			dataType: 'json',

			success: function(response){
				if(response.TipoMensaje==1){
					$.mensajeExito(response.Mensjae,4);
				}
				else
				$.mensajeError(response.Mensaje,4);
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
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