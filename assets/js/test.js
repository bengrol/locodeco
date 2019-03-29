$(document).ready(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            alert("submitted!");
        }
    });

    $().ready(function () {
        // validate the comment form when it is submitted
        $("#commentForm").validate({
            submitHandler: function (form) {

                alert('ok');

            }
        });


    });
});