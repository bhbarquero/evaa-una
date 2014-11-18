// JavaScript Document
$(document).ready(function(e) {
	
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
	var src = String( window.location.href ).split('=');
	
	$('#btnAsiganciones').click(function(e) {
		var url="ListarAsignaciones.php?grupoId="+src[1];
       $(document.location=url);
    });
	
	$('#btnEstudiantes').click(function(e) {
      
		$(document.location="agregarEstudiantes.php?grupoid="+$('#grupoId').val());
    });
	
	$('#btnEditar').click(function(e) {
        var parametros=
			{
				"anno":$('#Anno').val(),
				"ciclo":$('#Ciclo').val(),
				"cursoid":$('#cmbCurso').val(),
				"grupoid":$('#grupoId').val()
			};

		$.ajax({
			data:parametros,
			url:"../PHP/editarGrupo.php",
			type: "POST",

			success: function(response){
				alert(response)
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
    });
	
	$('#btnAgregar').click(function(e) {
        var parametros=
			{
				"anno":$('#Anno').val(),
				"ciclo":$('#Ciclo').val(),
				"cursoid":$('#cmbCurso').val()
			};

		$.ajax({
			data:parametros,
			url:"../PHP/registrarGrupo.php",
			type: "POST",

			success: function(response){
				alert(response)
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
    });
	
	var parametros=
			{
			};

		$.ajax({
			data:parametros,
			url:"../PHP/CargarCursos.php",
			type: "POST",

			success: function(response){
				$('#cmbCurso').html(response);
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
	
	if($('#grupoId').val()==0)
	{
		$('#btnEditar').css('display','none');
		$('#btnAsiganciones').css('display','none');
		$('#btnEstudiantes').css('display','none');
		
		}
		else
		{/*Cargar informacion del grupo*/
		$('#btnAgregar').css('display','none');
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
					$('#Ciclo').val(response.Ciclo);
					$('#Anno').val(response.Anno);
					$('#cmbCurso').val(response.CursoId);
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