$(document).ready(function(e) {
	var src = String( window.location.href ).split('=');
	
    var parametros =
		{
			"grupoId":src[1]
		}
		$.ajax({
			data:parametros,
			url:"../PHP/ListarAsignacionesphp.php",
			type: "POST",

			success: function(response){
				var res=response.split(",");
				$('#Resultado').html(res[0]);
				$('#Curso').val(res[1]);
				
			},
			error: function(response){
							
				alert(response);
				}
		});
});
