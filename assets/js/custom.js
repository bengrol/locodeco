$(document).ready(function () {

    $.validator.setDefaults({
        submitHandler: function (form) {
            form.trigger( "reset" );
            $( "section.contact_form" ).toggle( "slow" )
                .delay(2000).toggle("slow");
        }
    });

    $().ready(function () {

        $("#locoContactForm").validate({
            submitHandler: function (form) {

                form.preventDefault();
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


    });
});
