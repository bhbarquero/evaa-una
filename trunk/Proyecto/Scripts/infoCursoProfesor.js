// JavaScript Document
$(document).ready(function(e) {
	
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
	var src = String( window.location.href ).split('=');
	
	$('#btnAsiganciones').click(function(e) {
		var url="ListarAsignaciones.php?grupoId="+src[1];
       $(document.location=url);
    });
	
	/*Cargar informacion del grupo*/
		var parametros=
			{
				"grupo":$('#grupoId').val()
			};

		$.ajax({
			data:parametros,
			url:"../PHP/consultarGrupoProfesor.php",
			type: "POST",
			dataType: 'json',

			success: function(response){
				if(response.TipoMensaje==1){
					$('#Periodo').html(response.Periodo);
					$('#nombreCurso').html(response.Curso);
				}
				else
				$.mensajeError(response.Mensaje,4);
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
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