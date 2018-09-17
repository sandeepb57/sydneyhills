$(function() {
    $('#datatable-responsive1').DataTable({
        ordering: false
    });
})

function addCommentBeforeDeny(bookingId, action) {
    var modalTitle = "Booking Action";
    var modalBodyTemplate = `<div class="row"><div class="col-xs-12">`
    if (action == 'isAttended') {
        modalBodyTemplate += `<div class="col-xs-12 col-md-6"><label>Select attended or not <strong class="text-danger">*</strong></label><select class="form-control" name="attended-or-not" id="attended-or-not">
		<option value="0">Select</option>
		<option value="1">Attended</option>
		<option value="2">Not attended</option>
	</select></div>`;
    }
    modalBodyTemplate += `<div class="col-xs-12 col-md-6"><label>Please enter your reason <strong class="text-danger">*</strong></label><textarea class="form-control" name="denycomment" id="denycomment"></textarea></div></div></div>`;

    var btnName = action == 'isAttended' ? 'Save' : 'Deny';

    var modalFooterTemplate = `<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary action disabled" onclick="adminBookingActions(` + bookingId + `, '` + action + `')">` + btnName + `</button>`;
    $(".modal-title").html(modalTitle);
    $(".modal-body").html(modalBodyTemplate);
    $(".modal-footer").html(modalFooterTemplate);
    $(".modal").modal();

    if (action == 'isAttended') {
        $("#denycomment, #attended-or-not").on('keyup mouseleave', function() {
            if ($.trim($('#denycomment').val()) != '' && $.trim($('#attended-or-not').val()) != 0) {
                $(".action").removeClass('disabled');
            } else {
                $(".action").addClass('disabled');
            }
        })
    } else {
        $("#denycomment").on('keyup mouseleave', function() {
            if ($.trim($(this).val()) != '') {
                $(".action").removeClass('disabled');
            } else {
                $(".action").addClass('disabled');
            }
        })
    }
}

function adminBookingActions(bookingId, action) {
    if (action == 'isAttended') {
        var params = { bookingId: bookingId, isAttended: $('#attended-or-not').val(), comment: $("#denycomment").val() };
    } else {
        var params = { bookingId: bookingId, comment: $("#denycomment").val() };
    }
    $.post(base_url + 'admindashboard/adminBookingActions', params, function(data) {
        if (data == 200) {
            location.reload();
        } else {
            console.log("Something went wrong, please try again!");
        }
    })
}