$(document).ready(function(e) {
	var src = String( window.location.href ).split('=');
	
	 var parametros=
			{
				"asignacionid":src[1]
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
			},
			error: function(response){
							
				alert(response);
				}
		});
	
	$('#btnEditarAsignacion').click(function(e) {
       var parametros=
			{
				"asignacionid":src[1],
				"descripciona":$("#Descripcion").val(),
				"fechainicio":$("#FechaInicio").val(),
				"fechafin":$("#FechaFin").val()
			};
			$.ajax({
			data:parametros,
			url:"../PHP/EditarAsignacion.php",
			type: "POST",

			success: function(response){
				
				alert(response);
			},
			error: function(response){
							
				alert(response);
				}
		});
    });
	
	$('#btnInsertarAsignacion').click(function(e) {
        var parametros=
			{
				"grupoid":1,
				"descripciona":$('#Descripcion').val(),
				"fechainicio":$('#FechaInicio').val(),
				"fechafin":$('#FechaFin').val(),
				//"archivo":null
			};
			$.ajax({
			data:parametros,
			url:"../PHP/registrarAsignacion.php",
			type: "POST",

			success: function(response){
				
				alert(response);
			},
			error: function(response){
							
				alert(response);
				}
		});
    });
});