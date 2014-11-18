$(document).ready(function(e) {

	$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
	
    $('#menuLink').click(function (e) {
        e.preventDefault();
		$("#divPrincipal").toggleClass("responsivo");

    });
	
	//cerrar sesion
	$('#aCerrar').click(function(){
		if (confirm('¿Está seguro que desea salir?')) {
    		$.ajax({
				url:"../PHP/CerrarSesion.php",
	
				success: function(response){
					document.location='../HTML/login.php';
				}
			});
		}
		else{
			$('#aCerrar').blur();
		}	
	});
	
	$('#aCursos').click(function(){
		 $.ajax({			
			url:"../PHP/obtenerTipoUsuario.php",
			dataType: 'json',
			success: function(data){
				if(data.TipoMensaje==1)
					if(data.TipoUsuario==1)
						document.location='../HTML/misCursosProfesor.php';
					else
						document.location='../HTML/misCursosAlumno.php';
				else{
					$.mensajeError(data.Mensaje, 4);
				}
			},
			error: function(data){
				$.mensajeError("Error al comprobar el tipo de usuario"+data.Mensaje, 4);
				}
			});
	});
	
	$('#aPerfil').click(function(){
		$.ajax({			
			url:"../PHP/obtenerTipoUsuario.php",
			type: "POST",
			dataType: 'json',
			success: function(data){
				if(data.TipoMensaje==1)
					if(data.TipoUsuario==1)
						document.location='../HTML/perfilProfesor.php';
					else
						document.location='../HTML/perfilAlumno.php';
				else{
					$.mensajeError(data.Mensaje, 4);
				}
			},
			error: function(data){
				$.mensajeError("Error al comprobar el tipo de usuario", 4);
				}
			});
	});

});


$.mensajeExito = function(mensaje, segundos){
		$(".msgContent").toggleClass("activeExito");
		$("#mensaje").html(mensaje);
		  
		setTimeout(function(){
			$(".msgContent").removeClass("activeExito");
		},segundos*1000);
	};

$.mensajeError = function(mensaje, segundos){
		$(".msgContent").toggleClass("activeError");
		$("#mensaje").html(mensaje);
		
		setTimeout(function(){
			$(".msgContent").removeClass("activeError");
		},segundos*1000);
	};
