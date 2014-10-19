// JavaScript Document
$(document).ready(function(e){
	
    $("#btnEntrar").click(function(){
		var parametros=
			{
				"correo":$("#correo").val(),
				"pass":$("#pass").val()
			};
			
		$.ajax({
		data:parametros,
		url:"../PHP/validarLogin.php",
		type: "POST",

		success: function(response){
			alert(response+"si");
		},
		error: function(response){
			alert(response+"no");
			}
		});
		
	});
});