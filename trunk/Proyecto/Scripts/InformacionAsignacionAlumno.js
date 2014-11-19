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
					var fecha = new Date();
					mes=parseInt(fecha.getMonth())+1;
					anno=fecha.getFullYear();
					dia=fecha.getDate();
					var fechaFin=res[3].split("-")

					
					if(parseInt(fechaFin[0])>=anno)
					{
						if(parseInt(fechaFin[1])>=mes)
						{
							if(parseInt(fechaFin[2])>=dia)
							{
							}
							else
							{
								$('#archivo').attr("disabled",true);
								$('#btnEntregar').attr("disabled",true);
								$('#btnEntregar').val("Aún no es fecha de entrega");
							}
							
						}
						else
							{
								$('#archivo').attr("disabled",true);
								$('#btnEntregar').attr("disabled",true);
								$('#btnEntregar').val("Aún no es fecha de entrega");
							}
					}
					else
							{
								$('#archivo').attr("disabled",true);
								$('#btnEntregar').attr("disabled",true);
								$('#btnEntregar').val("Aún no es fecha de entrega");
							}
					
					
					$('#Descripcion').val(res[1]);
					$('#FechaInicio').val(res[2]);
					$('#FechaFin').val(res[3]);
					
					if(res[4]!="N"){//si ya hay
					
						dir="../PHP/editarEntrega.php";
						$('#btnEntregar').val("ACTUALIZAR ENTREGA");
						$('#link').html('<a href="'+res[4]+'" target="_blank">Ver archivo</a>');
						
					}else{// si no hay
					
						dir="../PHP/RegistarEntregaAlumno.php";
						$('#link').css("display","none");
						$('#btnEntregar').val("ENTREGAR");
					}
					
					
				},
				error: function(response){
								
					$.mensajeError("Error al cargar la asignación. "+resopnse,4);
				}
			});
			
			$('#frmAsignacion').validate({
        
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
					
					/*----GUARDA LA ENTREGA-----*/
					var parametros=
					{
						"asignacionid":$('#Id').val(),
						"archivo":response
					};
					
						
						$.ajax({
						data:parametros,
						url:dir,
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
						/*---------------------------------------------------------*/
				},
				error: function(response){
									
					$.mensajeError("Error al subir el archivo. "+response.Mensaje,4);
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