(function (window, document) {
	
    var layout   = document.getElementById('layout'),
        notif     = document.getElementById('notif'),
        notifLink = document.getElementById('notifLink');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
         //The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    notifLink.onclick = function (e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(notifications, active);
        toggleClass(notificationsLink, active);
    };

}(this, this.document));



    $.mensajeExito = function(mensaje, segundos){
	$(".msgContent").toggleClass("activeExito");
	  /*$("#notifyType").toggleClass("success");*/
	  $(".msgContent").html(mensaje);
	  
	  setTimeout(function(){
		$(".msgContent").removeClass("active");
		/*$("#notifyType").removeClass("success");*/
	  },segundos*1000);
	};

	$.mensajeError = function(mensaje, segundos){
	  $(".msgContent").toggleClass("activeError");
	  /*$("#notifyType").toggleClass("success");*/
	  $(".msgContent").html(mensaje);
	  
	  setTimeout(function(){
		$(".msgContent").removeClass("active");
		/*$("#notifyType").removeClass("success");*/
	  },segundos*1000);
	};
