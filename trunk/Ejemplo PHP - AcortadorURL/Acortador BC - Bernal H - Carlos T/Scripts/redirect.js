// JavaScript Document	
    function Cp (){
	
		var upass = document.getElementById("txtpass");
		var ppass = document.getElementById("hpass");
		var hvis = document.getElementById("hvisi");
		var momento = document.getElementById("momento");
		var tiempo = document.getElementById("htiempo");
		var div = document.getElementById("divRedi");
		var imgA = document.getElementById("imgA");
		var vis = document.getElementById("visitas");
		
		//alert(upass.value+" "+ppass.value);
		if( upass.value == ppass.value)
		{
			setTimeout ("redireccionar()", tiempo.value*1000);
			div.style.display="none";
			imgA.style.display="block";
			momento.innerHTML="Contrasena correcta. Seras redireccionado en "+ tiempo.value +" segundos.";
			vis.innerHTML = "Este sitio ha sido visitado "+ hvis.value +" veces.";
		}
		else
		{
			momento.innerHTML ="Contrasena invalida";
		}
	};
	
	function redireccionar(){
		var destino = document.getElementById("hurl");
		location.href=destino.value;
		}