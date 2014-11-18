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
	
				success: function(response){
					var res= response.split(",");
					$('#Descripcion').val(res[1]);
					$('#FechaInicio').val(res[4]);
					$('#FechaFin').val(res[5]);
					if(res[6]!="")
					$('#link').html('<a href="'+res[6]+'" target="_blank">Ver archivo</a>')
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
		}
	
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
							dir="../PHP/EditarAsignacion.php";
							$.mensajeExito(response.Mensaje,4);
							document.location.reload(true);
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