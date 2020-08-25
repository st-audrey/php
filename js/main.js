
function showCard(id, city, country, lat, lng, img, date) {

    var detail = document.getElementById('cardDetail');
    detail.innerHTML = "";


    //création d'une row boot
    var row = document.createElement("DIV");
    row.classList.add("row");
    var mapTitle = document.createElement("DIV");
    mapTitle.append(country);

    //création de la div de la map
    var mapZone = document.createElement("DIV");
    mapZone.setAttribute("id", "map");

    detail.appendChild(mapTitle);
    detail.appendChild(row);
    row.appendChild(mapZone);

    var latitude = parseFloat(lat);
    var longitude = parseFloat(lng);

    function initMap(latitude, longitude) {

        var city = {lat: latitude, lng: longitude};

        var map = new google.maps.Map(
            //google maps zoom de 1 (vue de très loin) à 20 (vue de très près)
            document.getElementById('map'), {zoom: 4, center: city});
        // The marker
        var marker = new google.maps.Marker({position: city, map: map});
    }
    initMap(latitude,longitude);
}










