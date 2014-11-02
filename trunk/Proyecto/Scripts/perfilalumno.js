// JavaScript Document

$(document).ready(function(e) 
{
		


	$("#btnInsertarAlumno").click(function()
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
				"fechaingreso":$("#FechaIngreso").val()
			};
		};
		
		$.ajax({
			data:parametros,
			url:"../PHP/registrarAlumno.php",
			type: "POST",

			success: function(response){
				alert(response);
			},
			error: function(response){
				alert(response);
				}
		});
		
	});
	
	
	//Consulta de correo para usuario
	
		$("#btnConsulta").click(function()
	{
		var parametros =
		{
			"correoUsuario":$("#prueba").val()
		}
		$.ajax({
			data:parametros,
			url:"../PHP/ConsultarEstudiante.php",
			type: "POST",

			success: function(response){
				var res=response.split(",");
				alert(res[7]);
				$('#Cedula').val(res[0]);
				$('#Nombre').val(res[1]);
				$('#Apellido').val(res[2]);
				$('#FechaNacimiento').val(res[3]);
				$('#Direccion').val(res[4]);
				$('#TelefonoFijo').val(res[5]);
				$('#TelefonoMovil').val(res[6]);
				$('#FechaIngreso').val(res[7]);
				
			},
			error: function(response){
							
				alert(response);
				}
		});
		
		});
		
		
		//Funcion Editar Estudiante
		
		$('#btnEditarAlumno').click(function() {
        var parametros=
			{
				"cedula":$("#Cedula").val(),
				"nombre":$("#Nombre").val(),
				"apellido":$("#Apellido").val(),
				"fechanacimiento":$("#FechaNacimiento").val(),
				"direccion":$("#Direccion").val(),
				"telefonofijo":$("#TelefonoFijo").val(),
				"telefonomovil":$("#TelefonoMovil").val(),
				"fechaingreso":$("#FechaIngreso").val()
			};
			$.ajax({
			data:parametros,
			url:"../PHP/editarEstudiante.php",
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