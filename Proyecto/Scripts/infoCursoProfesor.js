// JavaScript Document
$(document).ready(function(e) {
	
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
	var src = String( window.location.href ).split('=');
	
	$('#btnAsiganciones').click(function(e) {
		var url="ListarAsignacionesProfesor.php?grupoId="+src[1];
       $(document.location=url);
    });
	
	$('#btnEstudiantes').click(function(e) {
        $(document.location="agregarEstudiantes.php?grupoid="+ $('#grupoId').val());
    });
	
	var dir="";
	
	$('#frmResgistro').validate(
	{
		submitHandler: function(form){
        var parametros=
			{
				"anno":$('#Anno').val(),
				"ciclo":$('#Ciclo').val(),
				"cursoid":$('#cmbCurso').val(),
				"grupoid":$('#grupoId').val()
			};
	
			$.ajax({
			data:parametros,
			url:dir,
			type: "POST",
			dataType: 'json',
			
			success: function(response){
				
				if(response.TipoMensaje==1){
					$.mensajeExito(response.Mensaje,4);
					
					if(dir=="../PHP/registrarGrupo.php"){
						alert(dir);
						setTimeout(function(){
							document.location='../HTML/misCursosProfesor.php';
							},3000);
					}
					else{
						setTimeout(function(){
							document.location.reload(true);
							},3000);
					}
				}
				else{
					$.mensajeError(response.Mensaje,4);
				}
			},
			error: function(response){		
				$.mensajeError("Error desconocido: "+response.Mensaje,4);
				}
			});
		}
    });
	
	
	//carga los cursos
	var parametros={};

		$.ajax({
			data:parametros,
			url:"../PHP/CargarCursos.php",
			type: "POST",
			dataType:"json",

			success: function(response){
				if(response.TipoMensaje==1)
				$('#cmbCurso').html(response.Mensaje);
				else
				$.mensajeError(response.Mensaje,4); 
			},
			error: function(response){		
				$.mensajeError("Error desconocido",4);
				}
		});
	
	if($('#grupoId').val()==0)
	{
		$('#btnPromedio').css('display','none');
		$('#btnAsiganciones').css('display','none');
		dir="../PHP/registrarGrupo.php";
		$('#hs').html("Nuevo grupo");
	}
	else
	{/*Cargar informacion del grupo*/
		
		dir="../PHP/editarGrupo.php";
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
					$('#hs').html("Mi grupo");
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