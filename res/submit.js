$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'send.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#contactForm')[0].reset();
                $('#notification').removeClass('d-none');
                setTimeout(function() {
                    $('#notification').addClass('d-none');
                }, 10000);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});

function getCookie(name) {
    let cookieArr = document.cookie.split(";");
    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split("=");
        if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

document.addEventListener("DOMContentLoaded", function() {
    if (getCookie("contacted")) {
        document.getElementById("submitButton").disabled = true;
    }
});