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
				"telefonomovil":$("#TelefonoMovil").val()
			};
		};
		
		$.ajax({
			data:parametros,
			url:"../PHP/registrarProfesor.php",
			type: "POST",

			success: function(response){
				
				alert("Alumno Ingresado con Exito");
			},
			error: function(response){
							
				alert(response);
				}
		});
		
	});
});