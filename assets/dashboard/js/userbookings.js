function cancelBooking(bookingId) {
    $.post(base_url + 'userdashboard/setcancelbooking', { bookingId: bookingId }, function(data) {
        console.log(data)
        if (data == 200) {
            location.reload();
        } else {
            alert('Something went wrong, please try again later!')
        }
    })
}