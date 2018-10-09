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
                    labelString: 'Months'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Number of rides'
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
        // Updating the Top riding details
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

// Top riding details
function updateViewRideTypeData(rideTypeSummary) {
    var typeOfRides = {};
    rideTypeSummary.forEach(typeOfRidesObj => {
        var sum = ignoreSomeValues(Object.values(typeOfRidesObj)).reduce((a, b) => (Number(a) + Number(b)), 0);
        typeOfRides[typeOfRidesObj.typeOfRide] = sum;
    });

    // console.log(typeOfRides);
    var sortingRideCounts = [];

    $.each(typeOfRides, function(key, value) {
        sortingRideCounts.push({ count: value, rideType: key });
    });

    sortingRideCounts.sort(function(a, b) {
        if (a.count < b.count) { return 1 }
        if (a.count > b.count) { return -1 }
        return 0;
    });
    // console.log(sortingRideCounts);
    var template = '';
    var color = '';
    $.each(sortingRideCounts, function(key, value) {
        // console.log(key, value.count, value.rideType);
        color = value.count > 0 ? 'bg-green' : '';
        template += `<div>
						<p>` + value.rideType + `</p>
						<div class="">
							<div class="progress progress_sm">
								<div class="progress-bar ` + color + `" role="progressbar" style="width:` + value.count + `%" aria-valuenow="` + value.count + `"></div>
							</div>
						</div>
					</div>`;

    });

    $("#top-rides").html(template);
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