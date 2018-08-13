$(function($) {

    HoverEffectForFormFields()

    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href')

        // target element
        var $id = $(id)
        if ($id.length === 0) {
            return
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault()

        // top position relative to the document
        var pos = $id.offset().top - 50

        // animated top scrolling
        $('body, html').animate({ scrollTop: pos }, 500)
    })

    // Back to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#back-to-top').fadeIn()
        } else {
            $('#back-to-top').fadeOut()
        }
    })

    // scroll body to 0px on click
    $('#back-to-top').click(function() {
        // $('#back-to-top').tooltip('hide')
        $('body,html').animate({
            scrollTop: 0
        }, 800)
        return false
    })

    /*    [ Show password ] */
    var showPass = 0;
    $('.btn-show-pass').on('click', function() {
        if (showPass === 0) {
            $(this).next('input').attr('type', 'text');
            $(this).find('i').removeClass('icon-eye-blocked');
            $(this).find('i').addClass('icon-eye');
            showPass = 1;
        } else {
            $(this).next('input').attr('type', 'password');
            $(this).find('i').addClass('icon-eye-blocked');
            $(this).find('i').removeClass('icon-eye');
            showPass = 0;
        }
    });

    $("#show-signup-form").click(function() {
        $("#login_form").hide();
        $('#auth-heading').html("Sign up");
        $("#register-form").show();
    });
    $("#show-login-form").click(function() {
        $("#register-form").hide();
        $('#auth-heading').html("Sign in");
        $("#login_form").show();
    });

    $("#close-modal").click(function() {
        $("body").removeClass('scroll-none');
        $("#auth-modal,.modal-overlay").removeClass('open');
    });
})

function HoverEffectForFormFields() {
    // labels to reduce size on hover input field
    $("input[type='text'],input[type='email'],input[type='password'],textarea").focus(function() {
        $(this).siblings('label').addClass('active')
        return false
    })
    $("input[type='text'],input[type='email'],input[type='password'],textarea").blur(function() {
        if ($(this).val() === '') {
            $(this).siblings('label').removeClass('active')
        } else {
            $(this).siblings('label').addClass('active')
        }
        return false
    })
}

function showLogin() {
    $("#auth-modal,.modal-overlay").addClass('open');
    $('#auth-heading').html("Sign in");
    $("body").addClass('scroll-none');
    $("#register-form").hide();
    $("#login_form").show();
}

function showSignup() {
    $("#auth-modal,.modal-overlay").addClass('open');
    $('#auth-heading').html("Sign up");
    $("body").addClass('scroll-none');
    $("#register-form").show();
    $("#login_form").hide();
}