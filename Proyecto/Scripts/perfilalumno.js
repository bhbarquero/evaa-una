// JavaScript Document

$(document).ready(function(e) 
{
	
		alert("mi correo es correo");
		
		var persona;
	var sesion=	{
		"correo":correo
		};
	$.ajax({
			data:sesion,
			url:"../PHP/VerificarCorreo.php",
			type: "POST",

			success: function(response){
				
				persona=response;
			},
			error: function(response){
							
				alert(response);
				}
		});
		
	if(persona==null){

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
		}
		else
		{
			$("#Cedula").val(persona['Cedula']);
			$("#Nombre").val(persona['Nombre']);
			
			}
});