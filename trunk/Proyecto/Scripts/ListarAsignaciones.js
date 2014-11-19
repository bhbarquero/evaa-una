$(document).ready(function(e) {
	var src = String( window.location.href ).split('=');
	
    var parametros =
		{
			"grupoId":src[1]
		}
		$.ajax({
			data:parametros,
			url:"../PHP/ListarAsignacionesProfesor.php",
			type: "POST",
			dataType:"json",
			beforeSend: function(){
				$('#divTablaResultados').html("<br><br><h2 class='content-subhead'>Cargando asignaciones...</h2>");
			},
			success: function(response){
				if(response.TipoMensaje==1){
					$('#divTablaResultados').html(response.Mensaje);
					$('#Curso').html(response.Curso);
				}
				else
				{
					$.mensajeError(response.Mensaje,4);
				}
				
			},
			error: function(response){
							
				$.mensajeError(response.Mensaje,4);
			}
		});
		
		$('#btnAgregar').click(function(e) {
            document.location="../HTML/InformacionAsignacion.php?P="+src[1]+"&G=1"
        });
});

$.mensajeError = function(mensaje, segundos){
		$(".msgContent").toggleClass("activeError");
		$("#mensaje").html(mensaje);
		
		setTimeout(function(){
			$(".msgContent").removeClass("activeError");
		},segundos*1000);
	};
