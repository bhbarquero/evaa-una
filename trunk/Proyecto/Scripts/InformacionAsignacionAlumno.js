$(document).ready(function(e) {
	
	var dir="";
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
		 var parametros=
				{
					"asignacionid":$('#Id').val()
				};
				$.ajax({
				data:parametros,
				url:"../PHP/consultarEntrega.php",
				type: "POST",
				
	
				success: function(response){
					var res= response.split(",");
					$('#Descripcion').val(res[1]);
					$('#FechaInicio').val(res[2]);
					$('#FechaFin').val(res[3]);
					if(res[4]!="N"){
						$('#btnEntregar').css('display','none');
					$('#link').html('<a href="'+res[4]+'" target="_blank">Ver archivo</a>')
					}else{
					$('#link').css("display","none");
					$('#btnEditar').css('display','none');}
					
					
				},
				error: function(response){
								
					$.mensajeError("Error al guardar el archivo. "+resopnse,4);
				}
			});
			
			$('#btnEditar').click(function(e) {
			
			var formData = new FormData($("#frmAsignacion")[0]);
			
				$.ajax({
				data:formData,
			cache: false,
            contentType: false,
            processData: false,
			url:"../PHP/subirArchivo.php",
			type: "POST",
				
	
				success: function(response){
					var parametros=
				{
					"asignacionid":$('#Id').val(),
					"archivo":response
				};
				$.ajax({
				data:parametros,
				url:"../PHP/editarEntrega.php",
				type: "POST",
				dataType:"json",
				
	
				success: function(response){
					if(response.TipoMensaje==1){
					$.mensajeExito(response.Mensaje,4);
					document.location.reload(true);
				}
				else
					$.mensajeError(response.Mensaje,4);
				},
				error: function(response){
								
					$.mensajeError("Error al actualizar la entrega. "+response.Mensaje,4);
				}
			});
				},
				error: function(response){
								
					$.mensajeError("Error al actualizar la entrega. "+response.Mensaje,4);
				}
			});
			
			
             
        });
		
	
		
		$('#btnEntregar').click(function(e) {
			
			var formData = new FormData($("#frmAsignacion")[0]);
			
				$.ajax({
				data:formData,
			cache: false,
            contentType: false,
            processData: false,
			url:"../PHP/subirArchivo.php",
			type: "POST",
				
	
				success: function(response){
					var parametros=
				{
					"asignacionid":$('#Id').val(),
					"archivo":response
				};
				$.ajax({
				data:parametros,
				url:"../PHP/RegistarEntregaAlumno.php",
				type: "POST",
				dataType:"json",
				
	
				success: function(response){
					if(response.TipoMensaje==1){
					$.mensajeExito(response.Mensaje,4);
				}
				else
					$.mensajeError(response.Mensaje,4);
				},
				error: function(response){
								
					$.mensajeError("Error al guardar el perfil. "+response.Mensaje,4);
				}
			});
				},
				error: function(response){
								
					$.mensajeError("Error al guardar el perfil. "+response.Mensaje,4);
				}
			});
			
			
             
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
								document.location.reload(true);
							}
							else
							 document.location='../HTML/ListarAsignacionesProfesor';
						}
						else
							$.mensajeError(response.Mensaje,4);
				},
				error: function(response){		
					$.mensajeError("Error al guardar. "+response.Mensaje,4);
					}
				});
			},
			error: function(response){
							
				alert(response);
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