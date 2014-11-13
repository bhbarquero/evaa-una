// JavaScript Document

$(document).ready(function(e) 
{
	
	//Consulta de correo para usuario
	consultarInfo();
		
	$("#btnGuardarAlumno").click(function()
	{
		
		if($("#frmAlumno").valid())
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
		};
		
	});
	

	//Funcion Editar Estudiante
		
	$('#btnEditarAlumno').click(function() {
		if($('#frmAlumno').valid()){
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
		}
			
    });
	

});

function consultarInfo(){
	$.ajax({
			url:"../PHP/ConsultarAlumno.php",
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
				$('#FechaIngreso').val(res[7]);
				
			},
			error: function(response){
							
				alert(response);
				}
		});
}