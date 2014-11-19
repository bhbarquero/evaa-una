$(document).ready(function(e) {
	
	var dir="";
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
		if($('#Guardar').val()==0)
		{
			dir="../PHP/EditarAsignacion.php";
			
		 var parametros=
				{
					"asignacionid":$('#Id').val()
				};
				$.ajax({
				data:parametros,
				url:"../PHP/ConsultarAsignacion.php",
				type: "POST",
				dataType:"json",
	
				success: function(response){
					if(response.TipoMensaje==1){
						$('#Descripcion').val(response.Descripcion);
						$('#FechaInicio').val(response.Inicio);
						$('#FechaFin').val(response.Final);
						if(response.Archivo!="")
						$('#link').html('<a href="'+response.Archivo+'" target="_blank">Ver archivo</a>')
					}
					else
						$.mensajeError(response.Mensaje,4);
				},
				error: function(response){
								
					alert(response);
					}
			});
		}
		else
		{
			dir="../PHP/registrarAsignacion.php";
			$('#btnClificar').css("display","none");
			$('#btnCalificar').css('display','none');
		}
		
		$('#btnCalificar').click(function(e) {
            $(document.location="CalificarAsignacion.php?asigId="+$('#Id').val());
        });
		
	$("#frmAsignacion").validate(
	{
		submitHandler: function(form){
		var formData = new FormData($("#frmAsignacion")[0]);
       
			$.ajax({
			data:formData,
			cache: false,
            contentType: false,
            processData: false,
			url:"../PHP/subirArchivo.php",
			type: "POST",

			success: function(response){
				
				/*----------GUARDA LA ASIGNACION----------------*/
				var parametros=
				{
					"dir":response,
					"asignacionid":$('#Id').val(),
					"grupoid":$('#Id').val(),
					"descripciona":$("#Descripcion").val(),
					"fechainicio":$("#FechaInicio").val(),
					"fechafin":$("#FechaFin").val()
				};
				
				$.ajax({
				data:parametros,
				url:dir,
				type: "POST",
				dataType:"json",
	
				success: function(response){
					
					if(response.TipoMensaje==1){
							
							$.mensajeExito(response.Mensaje,4);
							if(dir="../PHP/EditarAsignacion.php")
							{
								setTimeout(function(){
									document.location.reload(true);}
									,1500);
							}
							else
								setTimeout(function(){
									document.location='../HTML/ListarAsignacionesProfesor';
									},1500);
							 
						}
						else
							$.mensajeError(response.Mensaje,4);
				},
				error: function(response){
					$.mensajeError("Error al guardar la asignación. "+response.Mensaje,4);
					}
				});
				/*------------------------------------------------------------*/
			},
			error: function(response){
							
				$.mensajeError("Error al guardar el archivo. "+response,4);
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