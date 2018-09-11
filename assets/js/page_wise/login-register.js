$.noConflict()

jQuery(document).ready(function($) {
    $("form[name='shlogin']").validate({

        /* @validation states + elements
         ------------------------------------------- */
        errorClass: 'state-error',
        validClass: 'state-success',
        errorElement: 'em',
        onkeyup: false,
        onclick: false,

        rules: {
            loginusername: {
                email: true,
                required: true
            },
            loginpassword: 'required'
        },
        messages: {
            loginusername: 'Please enter your email.',
            loginpassword: 'Please enter your password.'
        },

        /* @validation highlighting + error placement
         ---------------------------------------------------- */
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.field').addClass(errorClass).removeClass(validClass)
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.field').removeClass(errorClass).addClass(validClass)
        },
        errorPlacement: function(error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                element.closest('.option-group').after(error)
            } else {
                error.insertAfter(element.parent())
            }
        },

        submitHandler: function(form) {
            form.submit()
        }
    })

    $("form[name='shregister']").validate({
        /* @validation states + elements
         ------------------------------------------- */
        errorClass: 'state-error',
        validClass: 'state-success',
        errorElement: 'em',
        onkeyup: false,
        onclick: false,
        rules: {
            firstname: 'required',
            lastname: 'required',
            phone: 'required',
            email: 'required',
            address: 'required',
            password: 'required',
            check_agree: 'required'
        },
        messages: {
            firstname: 'Please enter your firstname.',
            lastname: 'Please enter your lastname.',
            phone: 'Please enter your phone number.',
            email: 'Please enter your email.',
            password: 'Please enter your password.',
            address: 'Please enter your address.',
            check_agree: 'Please check it.'
        },
        /* @validation highlighting + error placement
         ---------------------------------------------------- */
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.field').addClass(errorClass).removeClass(validClass)
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.field').removeClass(errorClass).addClass(validClass)
        },
        errorPlacement: function(error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                element.closest('.option-group').after(error)
            } else {
                error.insertAfter(element.parent())
            }
        },
        submitHandler: function(form) {
            form.submit()
        }
    })
})