// JavaScript Document
$(document).ready(function(e){
	
	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
    $("#btnEntrar").click(function(){
		
		if($('#frmLogin').valid()){
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
				var r=response.split(",");
				if(r[0]==1)
					$.mensajeExito(r[1], 4);
				else
					$.mensajeError(r[1], 4);
			},
			error: function(response){
				$.mensajeError(response, 4);
				}
			});
		}
		
	});
});


$.mensajeExito = function(mensaje, segundos){
	$(".msgContent").toggleClass("activeExito");
	  /*$("#notifyType").toggleClass("success");*/
	  $("#mensaje").html(mensaje);
	  
	  setTimeout(function(){
		$(".msgContent").removeClass("activeExito");
		/*$("#notifyType").removeClass("success");*/
	  },segundos*1000);
	};

	$.mensajeError = function(mensaje, segundos){
	  $(".msgContent").toggleClass("activeError");
	  /*$("#notifyType").toggleClass("success");*/
	  $("#mensaje").html(mensaje);
	  
	  setTimeout(function(){
		$(".msgContent").removeClass("activeError");
		/*$("#notifyType").removeClass("success");*/
	  },segundos*1000);
	};