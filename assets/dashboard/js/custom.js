/* Go to Previous Page */
function goBack() {
    window.history.back()
}

function validatePasswordFields() {
    var isValid = true
    if ($('input#currPwd').val() == '') {
        $('input#currPwd').css('border-color', '#a94442')
        isValid = false
    } else {
        $('input#currPwd').removeAttr('style')
    }

    if ($('input#newPwd').val() == '') {
        $('input#newPwd').css('border-color', '#a94442')
        isValid = false
    } else {
        $('input#newPwd').removeAttr('style')
    }

    if ($('input#confirmPwd').val() == '') {
        $('input#confirmPwd').css('border-color', '#a94442')
        isValid = false
    } else {
        $('input#confirmPwd').removeAttr('style')
    }

    if ($('input#confirmPwd').val() != '') {
        if ($('input#confirmPwd').val() != $('input#newPwd').val()) {
            $('input#confirmPwd').css('border-color', '#a94442')
            $('input#confirmPwd').parent().append("<label class='text-danger error-confirm'>Confirm new password not matched with new password</label>")
            isValid = false
        } else {
            $('input#confirmPwd').removeAttr('style')
            $('.error-confirm').remove()
        }
    }

    if (isValid) {
        return true
    } else {
        return false
    }
}