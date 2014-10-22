$(document).ready(function(e) {
    
    var layout   = $('#layout'),
        menu     = $('#notifications'),
        menuLink = $('#notificationsLink');

    menuLink.onclick = function (e) {
        var active = 'active';

        this.e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    };

});

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
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }