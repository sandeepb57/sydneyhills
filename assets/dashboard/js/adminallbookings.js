function addCommentBeforeDeny(bookingId) {
    var modalTitle = "Deny Booking";
    var modalBodyTemplate = `<label>Please enter your reason</label><textarea class="form-control" name="denycomment" id="denycomment"></textarea>`;
    var modalFooterTemplate = `<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-danger deny disabled" onclick="denyBooking(` + bookingId + `)">Deny</button>`;
    $(".modal-title").html(modalTitle);
    $(".modal-body").html(modalBodyTemplate);
    $(".modal-footer").html(modalFooterTemplate);
    $(".modal").modal();

    $("#denycomment").change(function() {
        console.log('sdfds');
        if ($.trim($(this).val()) != '') {
            $(".deny").removeClass('disabled');
        } else {
            $(".deny").addClass('disabled');
        }
    })
}

function denyBooking(bookingId) {
    $.post(base_url + 'admindashboard/denybooking', { bookingId: bookingId, comment: $("#denycomment").val() }, function(data) {
        if (data == 200) {
            location.reload();
        } else {
            console.log("Something went wrong, please try again");
        }
    })
}