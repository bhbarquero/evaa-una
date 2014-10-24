// JavaScript Document

$(document).ready(function(e) 
{
	$('#btnEditarProfesor').click(function() {
        var parametros=
			{
				"cedula":$("#Cedula").val(),
				"nombre":$("#Nombre").val(),
				"apellido":$("#Apellido").val(),
				"fechanacimiento":$("#FechaNacimiento").val(),
				"direccion":$("#Direccion").val(),
				"telefonofijo":$("#TelefonoFijo").val(),
				"telefonomovil":$("#TelefonoMovil").val(),
				"especialidad":$("#Especialidad").val()
			};
			$.ajax({
			data:parametros,
			url:"../PHP/editarProfesor.php",
			type: "POST",

			success: function(response){
				
				alert(response);
			},
			error: function(response){
							
				alert(response);
				}
		});
			
    });
	
	$("#pruebaBtn").click(function()
	{
		var parametros =
		{
			"correoUsuario":$("#pruebaTxt").val()
		}
		$.ajax({
			data:parametros,
			url:"../PHP/ConsultarProfesor.php",
			type: "POST",

			success: function(response){
				var res=response.split(",");
				$('#Cedula').val(res[0]);
				$('#Nombre').val(res[1]);
				$('#Apellido').val(res[2]);
				$('#FechaNacimiento').val(res[3]);
				$('#Direccion').val(res[4]);
				$('#TelefonoFijo').val(res[5]);
				$('#TelefonoMovil').val(res[6]);
				$('#Especialidad').val(res[7]);
				
			},
			error: function(response){
							
				alert(response);
				}
		});
		
		});

	$("#btnInsertarProfesor").click(function()
	{
		
		if($("#Cedula").val() != "")
		{
			var parametros=
			{
				"cedula":$("#Cedula").val(),
				"nombre":$("#Nombre").val(),
				"apellido":$("#Apellido").val(),
				"fechanacimiento":$("#FechaNacimiento").val(),
				"direccion":$("#Direccion").val(),
				"telefonofijo":$("#TelefonoFijo").val(),
				"telefonomovil":$("#TelefonoMovil").val(),
				"especialidad":$("#Especialidad").val()
			};
		};
		
		$.ajax({
			data:parametros,
			url:"../PHP/registrarProfesor.php",
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