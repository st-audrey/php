
function showCard(id, city, country, lat, lng, img, date) {

    var detail = document.getElementById('cardDetail');
    detail.innerHTML = "";

    //création d'une row
    var row = document.createElement("DIV");
    row.classList.add("row");

    //création d'une row 1
    var row1 = document.createElement("DIV");
    row1.classList.add("row");

    //création d'une row 2
    var row2 = document.createElement("DIV");
    row2.classList.add("row");

    //titre de la carte
    var mapTitle = document.createElement("DIV");
    mapTitle.classList.add("map-title");
    mapTitle.append("Carte postale n°"+id+" - "+city+" ("+country+")");

    //zone infos sur la carte
    var infosCarte = document.createElement("UL");
    infosCarte.classList.add("zone-info");
    var idCarte = document.createElement("LI");
    idCarte.append("Numéro de la carte: "+id);
    var dateCarte = document.createElement("LI");
    dateCarte.append("Date d'envoi: "+date);
    var destCarte = document.createElement("LI");
    destCarte.append("Destination: "+city+", "+country);

    infosCarte.appendChild(idCarte);
    infosCarte.appendChild(dateCarte);
    infosCarte.appendChild(destCarte);


    //Zone news
    var newsZone = document.createElement("DIV");
    newsZone.classList.add("zone-news");
    newsZone.setAttribute("id", "news");

    //TODO = (adapter les noms de pays dans la bdd(ok)) et les imposer sur la page admin when add card

    //Find sources that display news in a specific country. Possible options:
    //ae = United Arab Emirates
    //ar = Argentina
    //at = Austria
    //au = Australia
    //be = Belgium
    //bg = Bulgaria
    //br = Brazil
    //ca = Canada
    //ch = Suisse
    //cn = Chine
    //co = Colombia
    //cu = Cyprus
    //cz = Czechia
    //de = Germany
    //eg = Egypt
    //fr = France
    //gb = United Kingdom
    //gr = Greece
    //hk = Hong Kong
    //hu = Hungary
    //id = Indonesia
    //ie = Ireland
    //il = Israel
    //in = India
    //it = Italy
    //jp = Japan
    //kr = South Korea
    //lt = Lithuania
    //lv = Latvia
    //ma = Morocco
    //mx = Mexico
    //my = Malaysia
    //ng = Nigeria
    //nl = Netherlands
    //no = Norway
    //nz = New Zealand
    //ph = Philippines
    //pl = Poland
    //pt = Portugal
    //ro = Romania
    //rs = Serbia
    //ru = Russia
    //sa = South Africa
    //se = Sweden
    //sg = Singapore
    //si = Slovenia
    //sk = Slovakia
    //th = Thailand
    //tr = Turkey
    //tw = Taiwan
    //ua = Ukraine
    //us = USA
    //ve = Venezuela
    //za = South Africa (Zuid-Afrika is Dutch for South Africa)
    // Default: all countries.

    if (country == "Canada"){
        var countryNews = "ca";
    }else if (country == "Chine"){
        var countryNews = "cn";
    }else if (country == "Suisse"){
        var countryNews = "ch";
    }else if (country == "France"){
        var countryNews = "fr";
    }else if (country == "Italie"){
        var countryNews = "it";
    }else if (country == "Japon"){
        var countryNews = "jp";
    }else if (country == "Russie"){
        var countryNews = "ru";
    }else if (country == "Singapour"){
        var countryNews = "sg";
    }else if(country == "USA"){
        var countryNews = "us";
    }else{
        var countryNews = "us";
    }

    var url = 'http://newsapi.org/v2/top-headlines?' +
    'country='+ countryNews +'&' +
    'apiKey=64793232b58848829439b45b817e9f38';

    console.log(url);

    var req = new Request(url);
    fetch(req)
        //.then(function(response) {
            //console.log(response.json());
        .then(async response => {
            const jsonData = await response.json();

            var news = document.getElementById('news');
            var titre = document.createElement('P');
            titre.classList.add("title");
            titre.append("Dernière news: ");
            var title = document.createElement('P');
            title.classList.add("news-txt");
            var url = document.createElement('A');
            url.setAttribute("href", jsonData.articles[0].url);
            url.textContent = "Plus d'infos <";

            title.textContent = jsonData.articles[0].title;
            news.append(titre);
            news.append(title);
            news.append(url);

            //jsonData.articles.forEach(article=>{ ... });
        })

    //zone image
    var imageVille = document.createElement("IMG");
    imageVille.setAttribute("src", "./img/imagesVilles/"+img);
    imageVille.classList.add("img-city");

    //Zone map pays
    var mapZone = document.createElement("DIV");
    mapZone.setAttribute("id", "map");

    //zone map ville
    var mapZone2 = document.createElement("DIV");
    mapZone2.setAttribute("id", "map2");

    detail.appendChild(mapTitle);
    detail.appendChild(row);
    detail.appendChild(row1);
    detail.appendChild(row2);
    row.appendChild(mapZone);
    row.appendChild(mapZone2);
    row1.appendChild(infosCarte);
    row2.appendChild(imageVille);
    row2.appendChild(newsZone);

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










