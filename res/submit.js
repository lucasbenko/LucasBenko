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