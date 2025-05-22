let map;
let directionsService;
let directionsRenderer;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 0, lng: 0 },
        zoom: 8,
    });
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    document.getElementById("showRouteBtn").addEventListener("click", calculateAndDisplayRoute);
}

function calculateAndDisplayRoute() {
    const start = document.getElementById("start").value;
    const end = document.getElementById("end").value;
    directionsService.route(
        {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING,
        },
        (response, status) => {
            if (status === "OK") {
                directionsRenderer.setDirections(response);
            } else {
                window.alert("Directions request failed due to " + status);
            }
        }
    );
}



function populateTable(busNo, from, where, time) {
    
    var busNoCell = document.getElementById('distance');
    var fromCell = document.getElementById('duration');
    var whereCell = document.getElementById('startAddress');
    var timeCell = document.getElementById('endAddress');

    
    busNoCell.textContent = busNo;
    fromCell.textContent = from;
    whereCell.textContent = where;
    timeCell.textContent = time;
}

var busNo = '101';
var from = 'City Center';
var where = 'Suburb Station';
var time = '8:00 AM';


document.addEventListener('DOMContentLoaded', function() {
    populateTable(busNo, from, where, time);
    initMap();
});