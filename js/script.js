
$(document).ready(function () {
    $("input").blur(function () {
        if ($(this).val().trim().length === 0) {
            $(this).css("border-color", "#FB4A32");
        }
        else {
            $(this).css("border-color", "#13B5BF");
        }
    });
    $("textarea").blur(function () {
        if ($(this).val().trim().length === 0) {
            $(this).css("border-color", "#FB4A32");
        }
        else {
            $(this).css("border-color", "#13B5BF");
        }
    });


});




