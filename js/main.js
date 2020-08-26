
function showCard(id, city, country, lat, lng, img, date) {

    var detail = document.getElementById('cardDetail');
    detail.innerHTML = "";

    //création d'une row
    var row = document.createElement("DIV");
    row.classList.add("row");
    //création d'une row 2
    var row2 = document.createElement("DIV");
    row2.classList.add("row");

    var mapTitle = document.createElement("DIV");
    mapTitle.classList.add("map-title");
    mapTitle.append("Carte postale n°"+id+" - "+city+" ("+country+")");

    var imageVille = document.createElement("IMG");
    imageVille.setAttribute("src", "./img/imagesVilles/"+img);
    imageVille.classList.add("img-city");

    //création de la div de la map pays
    var mapZone = document.createElement("DIV");
    mapZone.setAttribute("id", "map");
    //création de la div de la map ville
    var mapZone2 = document.createElement("DIV");
    mapZone2.setAttribute("id", "map2");

    detail.appendChild(mapTitle);
    detail.appendChild(row);
    detail.appendChild(row2);
    row.appendChild(mapZone);
    row.appendChild(mapZone2);
    row2.appendChild(imageVille);

    var latitude = parseFloat(lat);
    var longitude = parseFloat(lng);

    //google maps
    function initMap(latitude, longitude) {
        //map country
        var city = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(
            //google maps zoom de 1 (vue de très loin) à 20 (vue de très près)
            document.getElementById('map'), {zoom: 4, center: city});
            // The marker
        var marker = new google.maps.Marker({position: city, map: map});

        //map city
        var map2 = new google.maps.Map(
            document.getElementById('map2'), {zoom: 10, center: city});

    }
    initMap(latitude,longitude);
}










