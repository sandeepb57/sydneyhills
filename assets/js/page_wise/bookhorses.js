$.noConflict()
var ridersFormFields = "";
var typeOfRideOptions = [];
jQuery(document).ready(function($) {

    ridersFormFields = $('#no-of-riders-forms').first().html()
    $('.riders-form').remove();

    FetchTypeOfRides()

    if (localStorage.getItem("confirmbookingdetails")) {
        // console.log(localStorage.getItem("confirmbookingdetails"));
        SubmitTheBookingDetails(localStorage.getItem("confirmbookingdetails"));
    }

    // initializing fullcalendar
    $('#booking-calendar').fullCalendar({
        defaultView: 'month',
        fixedWeekCount: false,
        showNonCurrentDates: true,
        selectable: true,
        disableDragging: true,
        // hiddenDays: [0, 6],
        navLinks: true,
        minTime: "09:00:00",
        maxTime: "16:00:00",
        scrollTime: "09:00:00",
        slotDuration: "00:30:00",
        header: {
            left: 'today,prev,next',
            center: 'title',
            right: 'month,agendaDay'
        },
        // Calendar data fetching for availability
        // events: base_url + "CommonServices/CheckAvailabilityOfSlots",
        dayClick: function(date, jsEvent, view) {
            if (!this.hasClass("fc-past")) {
                $(".fc-highlight").css('background-color', '#ffcc80');
            } else {
                $('#booking-calendar').fullCalendar('unselect');
            }
        },
        select: function(start, end, jsEvent, view) {
            if (moment().diff(start, 'days') > 0) {
                $('#booking-calendar').fullCalendar('unselect')
                return false
            } else {
                $(".fc-highlight").css({ "background": "#ffcc80", "opacity": "1" })
                    // $("td[data-date='" + $("#booking-date").val() + "']").removeAttr("style");
                $("#booking-date").val(start.format())
                $("#selected-date-time").html((new Date(start.format())).toLocaleString(Intl.DateTimeFormat().resolvedOptions().locale, { hour12: true, timeZone: Intl.DateTimeFormat().resolvedOptions().timeZone }))
                $("#type-of-ride-view").removeClass("hidden");
                CheckAvailabilityOfSelectedDate(start.format())
            }
        },
        viewRender: function(view, element) {
            // Drop the second param ('day') if you want to be more specific
            // This is to disable previous button.
            if (moment().isAfter(view.intervalStart, 'day')) {
                $('.fc-prev-button').addClass('fc-state-disabled');
            } else {
                $('.fc-prev-button').removeClass('fc-state-disabled');
            }

            // This is to disable completed days from the current day.
            if (moment().isBefore(view.intervalStart, 'day')) {
                $('.fc-day-top').addClass('fc-state-disabled');
            } else {
                $('.fc-day-top').removeClass('fc-state-disabled');
            }

            $(".fc-past").css("opacity", "0.3");
        }
    });

    $('select.number-of-riders').change(function() {
        if ($("#type-of-ride").val() > 0) {
            if ($("#number-of-riders").val() >= 1) {
                AppendTheNumberOfRidersFormElements($("#number-of-riders").val())
            } else {
                $('.riders-form').remove();
                $("#riders-cost").addClass("hidden");
                $('#confirm-booking-btn').addClass("hidden");
            }
        } else {
            $(".type-of-ride").css("background-color", "#f2dede");
        }
    });

    $('select.type-of-ride').change(function() {
        if ($("#number-of-riders").val() > 0) {
            AppendTheNumberOfRidersFormElements($("#number-of-riders").val())
        }
    });

    $('select.consecutive-week').change(function() {
        if ($("#number-of-riders").val() > 0) {
            RidersCostDetails()
        }
    });

    $("form[name='booking-horses']").validate({

        submitHandler: function(form) {
            var isValid = true;
            $("input.rider-firstname").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("input.rider-lastname").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("input.rider-email").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("input.rider-mobile").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("input.rider-age").each(function() {
                if ($(this).val() == "") {
                    // console.log(!isNaN($(this).val()));
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("input.rider-height").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });
            !

            $("input.rider-weight").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            $("select.ability-level").each(function() {
                if ($(this).val() == "") {
                    $(this).addClass('error1');
                    isValid = false;
                } else {
                    $(this).removeClass('error1');
                }
            });

            if (isValid) {
                ConfirmBookingDetails();
                return false;
            }
        }
    });
})

function FetchTypeOfRides() {
    $.get(base_url + "CommonServices/SeletOptionForTypeOfRide", null, function(data) {
        data = $.parseJSON(data)
        if (data.status == 200) {
            // Global variable
            typeOfRideOptions = data.typeOfRides
            $.each(data.typeOfRides, function(key, val) {
                $("#type-of-ride").append('<option value="' + val.rideTypeId + '">' + val.typeOfRide + '</option>')
            })
        } else {
            $("#type-of-ride").html('');
        }
    })
}

function AppendTheNumberOfRidersFormElements(val) {

    $(".type-of-ride").removeAttr("style");

    RidersCostDetails();
    var previousLength = $('.riders-form').length;
    // console.log(previousLength, Number(val));

    if (previousLength > Number(val)) {
        for (var i = previousLength; i > Number(val); i--) {
            // console.log(i, i - 1);
            $('.riders-form')[(i - 1)].remove();
        }
    }

    previousLength = $('.riders-form').length > 0 ? $('.riders-form').length : 0;
    // console.log(previousLength, $('.riders-form').length);

    if (previousLength < Number(val)) {
        for (var i = previousLength; i < Number(val); i++) {
            $("#no-of-riders-forms").append(ridersFormFields);
            // Changing the label and input, for and id attributes names for multiple fields of same type.
            $("label[for = rider-firstname]").attr("for", $("label[for = rider-firstname]").attr("for") + (i + 1))
            $("input[id = rider-firstname]").attr("id", $("input[id = rider-firstname]").attr("id") + (i + 1))
            $("label[for = rider-lastname]").attr("for", $("label[for = rider-lastname]").attr("for") + (i + 1))
            $("input[id = rider-lastname]").attr("id", $("input[id = rider-lastname]").attr("id") + (i + 1))
            $("label[for = rider-email]").attr("for", $("label[for = rider-email]").attr("for") + (i + 1))
            $("input[id = rider-email]").attr("id", $("input[id = rider-email]").attr("id") + (i + 1))
            $("label[for = rider-mobile]").attr("for", $("label[for = rider-mobile]").attr("for") + (i + 1))
            $("input[id = rider-mobile]").attr("id", $("input[id = rider-mobile]").attr("id") + (i + 1))
            $("label[for = rider-age]").attr("for", $("label[for = rider-age]").attr("for") + (i + 1))
            $("input[id = rider-age]").attr("id", $("input[id = rider-age]").attr("id") + (i + 1))
            $("label[for = rider-height]").attr("for", $("label[for = rider-height]").attr("for") + (i + 1))
            $("input[id = rider-height]").attr("id", $("input[id = rider-height]").attr("id") + (i + 1))
            $("label[for = rider-weight]").attr("for", $("label[for = rider-weight]").attr("for") + (i + 1))
            $("input[id = rider-weight]").attr("id", $("input[id = rider-weight]").attr("id") + (i + 1))

            $("div#no-of-riders-forms").find(".panel .panel-title").last().html("Rider " + (i + 1))
        }
    }
    $('.riders-form').removeClass("hidden");
    $('#confirm-booking-btn').removeClass("hidden");
    HoverEffectForFormFields(); // located in app.js
}

function RidersCostDetails() {
    $("tbody#riders-cost-details").children().remove();
    var typeOfRide = typeOfRideOptions.filter(ride => ride.rideTypeId == $("#type-of-ride").val())
    var template = '<tr><td>' + $("#consecutive-week").val() + '</td><td>' + $("#number-of-riders").val() + '</td><td>$ ' + Number(typeOfRide[0].rideAmount) + '</td></tr><tr><td></td><td>Sub Total</td><td>$ ' + (Number($("#consecutive-week").val()) * Number($("#number-of-riders").val()) * Number(typeOfRide[0].rideAmount)).toFixed(2) + '</td></tr>';
    $("tbody#riders-cost-details").append(template);
    $("#riders-cost").removeClass("hidden");
    $("#ride-type").html(typeOfRide[0].typeOfRide);
}

function CheckAvailabilityOfSelectedDate(selectedDate) {
    // console.log(selectedDate)
    $.get(base_url + "CommonServices/CheckAvailabilityOfSlots", { selectedDate: selectedDate }, function(data) {
        // console.log($.parseJSON(data));
        if (data != 1) {

        } else {
            $("#continue-after-date").removeClass("hidden");
        }
    })
}

function ConfirmBookingDetails() {
    if ($("#submit").length > 0) {
        // If user is already logged in
        SubmitTheBookingDetails($("form#booking-horses").serialize());
    } else {
        // If user is not logged in
        localStorage.setItem("confirmbookingdetails", $("form#booking-horses").serialize());
        window.location.href = base_url + "LoginRegisterServices/Signin"
    }
}

function SubmitTheBookingDetails(params) {
    $.post(base_url + "BookHorses/ConfirmBookingDetails", params, function(data) {
        // console.log(data)
        data = $.parseJSON(data)
        if (data.status == 200) {
            // console.log(data)
            if (localStorage.getItem("confirmbookingdetails")) {
                localStorage.removeItem("confirmbookingdetails");
            }
            window.location.href = base_url + "BookHorses/FetchBookingDetails?bookingId=" + data.bookingId;
        } else {
            alert(data.errorAt);
        }
    })
}