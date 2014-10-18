// JavaScript Document
$(document).ready(function(e) {
	
YUI().use('node-base', 'node-event-delegate', function (Y) {
    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('body').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});

var f = new Date();
var today = (f.getFullYear() + "/" + (f.getMonth() +1) + "/" + f.getDate());
$("#inpFechaInicio").val(today);

$("#inpTiempo").change(function(){
	if($("#inpTiempo").val()<0)
	{
		$("#inpTiempo").val(0);
	}
});

$("#btnAcortar").click(function()
	{
		if($("#inpURL").val() != ""){	
		
		var parametros={
			"url":$("#inpURL").val(),
			"pass":$("#inpPass").val(),
			"activo":$("#inpFechaInicio").val(),
			"vence":$("#inpFechaFinal").val(),
			"tiempo":$("#inpTiempo").val()
		};
		
		$("#divResultado").css("display","block");
		$.ajax({
			data:parametros,
			url: "../PHP/registrar.php",
			type: "POST",
			beforeSend: function(){
				$("#divResultado").css("display","block");
				$("#txtResultado").html("Procesando, espere por favor...");
			},
			success: function(response){
				$("#divResultado").css("display","block");
				$("#txtResultado").html(response);
				alertify.success("URL acortada con éxito");
			},
			error: function(response){
				$("#divResultado").css("display","block");			
				alertify.error(response);
				}
		});
	}
});

});