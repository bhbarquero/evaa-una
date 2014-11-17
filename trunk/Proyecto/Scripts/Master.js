(function (window, document) {
	
    var layout   = document.getElementById('divPrincipal'),
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
