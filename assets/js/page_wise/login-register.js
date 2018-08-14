$.noConflict()

jQuery(document).ready(function($) {

    $("form[name='shlogin']").validate({
        rules: {
            loginusername: {
                email: true,
                required: true
            },
            loginpassword: "required"
        },
        messages: {
            loginusername: "Please enter your email.",
            loginpassword: "Please enter your password."
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("form[name='shregister']").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            phone: "required",
            email: "required",
            address: {
                "address": '',
                required: true
            },
            password: "required",
            check_agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname.",
            lastname: "Please enter your lastname.",
            phone: "Please enter your phone number.",
            email: "Please enter your email.",
            password: "Please enter your password.",
            check_agree: "Please check it."
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $.validator.addMethod("address", function(value) {
        return value != " " && value != "";
    }, 'Please enter your address');
})