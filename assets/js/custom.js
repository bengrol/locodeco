$(document).ready(function () {

    $("#locoContactForm").validate();
    
});

(function($) {

    $("#locoContactForm").on('submit', function (e) {
        var isvalid = $("#locoContactForm").valid();
        if (isvalid) {
            e.preventDefault();

            var email = $('#email').val();
            var name = $('#name').val();
            var message = $('#message').val();

            $.ajax({
                url: '/post_mail.php',
                type: 'POST',
                data: {
                    action: 'BasicForm',
                    email: email,
                    name: name,
                    message: message,
                },
                success: function(element) {
                    console.log(element);
                }
            })
        }
    });


})(jQuery);
