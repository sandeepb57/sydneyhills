var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    data: {},
    // Configuration options go here
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Horse Riding Activities',
            fontSize: 20
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
});

$(document).ready(function() {
    fetchRideTypeSummary();
});

function fetchRideTypeSummary() {
    $.get(base_url + "admindashboard/getallridetypesummary", null, function(data) {
        var dataRideTypeSummary = $.parseJSON(data);
        // console.log(dataRideTypeSummary);

        // ignoreSomeValues remove unwanted keys
        var keys = ignoreSomeValues(Object.keys(dataRideTypeSummary[0]));
        // console.log(keys);

        // Updating the chart data
        updateChartData(dataRideTypeSummary, keys);
        // Updating the view ride type
        updateViewRideTypeData(dataRideTypeSummary);
    })
}

function updateChartData(summary, keys) {
    // x axis months
    for (var j = 0; j < keys.length; j++) {
        chart.data.labels.push(keys[j]);
    }

    // values of chart points
    for (var i = 0; i < summary.length; i++) {
        // fetching random color
        var randomColor = getRandomColor();
        var newDataset = {
            label: summary[i].typeOfRide, // name of ride
            backgroundColor: randomColor,
            borderColor: randomColor,
            data: ignoreSomeValues(Object.values(summary[i])),
            fill: false
        };
        // assigning the data to chart dataset
        chart.data.datasets.push(newDataset);
    }

    chart.update();
}

function updateViewRideTypeData(rideTypeSummary) {
    var typeOfRides = [];
    rideTypeSummary.forEach(typeOfRidesObj => {
        typeOfRides.push(typeOfRidesObj.typeOfRide.replace(/\s/g, '').replace('(', '').replace(')', ''));
        var sum = ignoreSomeValues(Object.values(typeOfRidesObj)).reduce((a, b) => (Number(a) + Number(b)), 0);
        typeOfRides[typeOfRidesObj.typeOfRide.replace(/\s/g, '').replace('(', '').replace(')', '')] = sum;
    });
    console.log(typeOfRides);
    typeOfRides.forEach(element => {
        // $("#" + element.toString()).attr("data-transitiongoal", typeOfRides[element]);
        $("#" + element.toString()).css('width', typeOfRides[element] + '%').attr('aria-valuenow', typeOfRides[element]);
        console.log(element, typeOfRides[element]);
    });
}

// removing unwanted values and keys based on months
function ignoreSomeValues(keysOrValuesArray) {
    keysOrValuesArray.shift();
    keysOrValuesArray.shift();
    var month = new Date();
    month = month.getMonth() + 1;
    for (var k = 1; k <= (12 - month); k++) {
        keysOrValuesArray.pop();
    }
    return keysOrValuesArray;
}

// returns random number
function randomScalingFactor() {
    return Math.round(Math.random() * 100);
}

// returns random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}