document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("visitorbook_form").addEventListener('submit', validate);
});

var content = document.getElementById('form').value;

function message(message) {
    document.getElementById('notification').innerHTML = '<div class="alert alert-danger" role="alert">'+ message + '</div>';
}


function validate(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var content = document.getElementById('content').value;

    if (name.length == 0) {
        message("the name field not empty");
        return;
    }
    else {
        message("");
    }

    if (email.length == 0) {
        message("you must put an valid email");
        return;
    }
    else {
        message("");
    }

    if (content.length == 0) {
        message("please no leave blank space");
        return;
    }
    else {
        message("");
    }

    this.submit();
}