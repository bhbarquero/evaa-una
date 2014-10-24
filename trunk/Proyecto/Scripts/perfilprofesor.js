// JavaScript Document

$(document).ready(function(e) 
{
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
				 var variable1 =Session["PersonaCedula"];
				
				$("#Cedula").val(variable1);
				
				
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