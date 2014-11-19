// JavaScript Document
$(document).ready(function(e) {

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

		$('#frmResgistro').validate({
        
        	submitHandler: function(form){
					
					var parametros={
							"correo":$('#CorreoUsuario').val(),
							"pass":$('#Contrasena').val(),
							"tipo":$('#TipoUsuarioId').val()
						};
						
				if($('#Contrasena').val()==$('#ReContrasena').val()){
					$.ajax({
						data:parametros,
						url: "../PHP/registrarUsuario.php",
						type: "POST",
						dataType:"json",
						
						success: function(response){
							$.mensaje(response.TipoMensaje,response.Mensaje,4);
							if(response.TipoMensaje==1){
								setTimeout(function(){
								document.location='../HTML/login.php';
								},2000);
							}
						},
						error: function(response){
							$.mensaje(2,response, 4);
							}
					});
				}
				else
				$.mensaje(2,"Las contraseñas no coinciden", 4);
		}

	});
	
});


$.mensaje= function(tipo,mensaje, segundos){
	if(tipo==1){
		$(".msgContent").toggleClass("activeExito");
	  	$("#mensaje").html(mensaje);
	  
	  	setTimeout(function(){
			$(".msgContent").toggleClass("activeExito");
	  	},segundos*1000);
	}
	if(tipo==2){
		$(".msgContent").toggleClass("activeError");
	  	$("#mensaje").html(mensaje);
	  
	  	setTimeout(function(){
			$(".msgContent").toggleClass("activeError");
	  	},segundos*1000);
	}
}

