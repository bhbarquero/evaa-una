$(document).ready(function(e) {
    var parametros =
		{
			"grupoId":1
		}
		$.ajax({
			data:parametros,
			url:"../PHP/ConsultarGrupo.php",
			type: "POST",

			success: function(response){
				var res=response.split(",");
				$('#Anno').val(res[0]);
				$('#Ciclo').val(res[1]);
				$('#Curso').val(res[2]);
				$('#Profesor').val(res[3]);
				
			},
			error: function(response){
							
				alert(response);
				}
		});
});