$(function () {
    $('[data-toggle="popover"]').popover()

})
//google maps zoom de 1 (vue de très loin) à 20 (vue de très près)

function initMap(lat, lng) {
    var ville = { lat: lat, lng: lng };
    var map = new google.maps.Map(
    document.getElementById('map'), { zoom: 13, center: ville });
    var marker = new google.maps.Marker({ position: ville, map: map });
    var map = new google.maps.Map(
    document.getElementById('map1'), { zoom: 4, center: ville });
    var marker1 = new google.maps.Marker({ position: ville, map: map });
}

var mymap = L.map('mapleaf').setView([51.505, -0.09], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYW5weXJlIiwiYSI6ImNrZTV0dTlmODE2dzEyemxmejcyazJlcncifQ.OYE_HQa2atis5MfhTcky1w'
}).addTo(mymap);






