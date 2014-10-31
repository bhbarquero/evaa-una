$(document).ready(function(e) {
	
	var src = String( window.location.href ).split('=');
	
	$('#btnAsiganciones').click(function(e) {
        alertr(src[0]);
		alertr();
    });
	
    var parametros =
		{
			"grupoId":src[1]
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