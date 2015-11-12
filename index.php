<html>
<head>
<meta charset=utf-8 />
<title>Political Twitching</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
<script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>

</head>
<body>

<div id="index-holder">

  <div class="map-legend inactive">

      <ul>
          <h4>Political Twitching</h4>
          <div class="eye-icon"></div>
          <li class="tory">Conservative</li>
          <li class="labour">Labour</li>
          <li class="snp">SNP</li>
          <li class="libdem">Lib Dem</li>
          <li class="green">Green</li>

      </ul>

  </div>

  <div class="custom-popup" id='map'></div>

  <div id="sb" class="sidebar">

      <div class="sidebar-container">

          <h1 class="tory">Political Twitching</h1>

          <nav>
              <ul>
                  <li id="sight-m">Sightings</li>
                  <li id="about-m" class="active">About</li>
              </ul>
          </nav>

      </div>

      <div id="about-holder" class="poltical-holder active">

          <h4>My Name is Tom Wicks, I'm a design student starting an 9 month project about The Houses Of Parliment.</h4>

          <p>Click the dots to learn more about some of my parlimentry experiences over the last couple of weeks.</p>

          <p>If you think you can help me with the project by sparing some time to show me round <a href="mailto:tom@tdwcks.co">Get In Touch Here</a></p>

      </div>

      <div id="poltical-holder" class="poltical-holder">

      </div>

  </div>

</div>

<script src='js/responsive.min.js'></script>
<script src='js/main.js'></script>


<script>
L.mapbox.accessToken = 'pk.eyJ1IjoidHdja3MiLCJhIjoiY2lnam1kMHJiMDA1MHQzbHVoYW1pMnc0aSJ9.DG5zRTwF4CSdYOAzBLLQFQ';

var mq = window.matchMedia( "(min-width: 420px)" );

if (mq.matches){
  var map = L.mapbox.map('map', 'twcks.cigjmczaj005cu1kr594jt49m', { zoomControl: false }).setView([51.499540, -0.123510], 24);
} else {
  var map = L.mapbox.map('map', 'twcks.cigjmczaj005cu1kr594jt49m', { zoomControl: false }).setView([51.49956655, -0.12568831], 17);
};

var info = document.getElementById('poltical-holder');
var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson = [{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.125260,51.499140]},
    "properties": {
        "name": "Nigel Lawson",
        "date": "28th October 2015",
        "description": "Situated opposite the Welsh Bridge and readily identifiable by the collection of allotted items on display; from old street signs to a Victorian chest and most notably a chesterfield chair or two! If your not encapsulated by this then you should surely be intrigued by the uniqueness of the name. The hand painted signage is visible throughout the vast stairways and hidden nooks and crannies. </p><p> There’s rarely two items the same (chesterfield an exception) and an overwhelming amount of treasures to be uncovered. Ranging from antiques, vintage and secondhand items to even a ‘Kermit’ the frog amusement ride. If you favour upcycling or just wish to collect the weird and wonderful, this place is definitely worth a visit! You are likely to be greeted outside by Jim and Murphy (the border terrier) and will certainly get a warm and friendly welcome on entering. The man and dog duo add character to this charming place and there’s always a bargain to be had and an opportunity to haggle!",
        "icon": {
            "iconUrl": "img/tory-icon.png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124712, 51.499219]},
    "properties": {
        "name": "Yvette Cooper",
        "date": "21st October 2015",
        "description": "An overwhelming amount of treasures to be uncovered. Ranging from antiques, vintage and secondhand items to even a ‘Kermit’ the frog amusement ride. If you favour upcycling or just wish to collect the weird and wonderful, this place is definitely worth a visit! You are likely to be greeted outside by Jim and Murphy (the border terrier) and will certainly get a warm and friendly welcome on entering. The man and dog duo add character to this charming place and there’s always a bargain to be had and an opportunity to haggle!",
        "icon": {
            "iconUrl": "img/labour-icon.png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }

},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124412, 51.499526]},
    "properties": {
        "name": "Alex Salmond",
        "date": "28th October 2015",
        "description": "If your not encapsulated by this then you should surely be intrigued by the uniqueness of the name. The hand painted signage is visible throughout the vast stairways and hidden nooks and crannies. </p><p> There’s rarely two items the same (chesterfield an exception) and an overwhelming amount of treasures to be uncovered. Ranging from antiques, vintage and secondhand items to even a ‘Kermit’ the frog amusement ride. If you favour upcycling or just wish to collect the weird and wonderful, this place is definitely worth a visit! You are likely to be greeted outside by Jim and Murphy (the border terrier) and will certainly get a warm and friendly welcome on entering. The man and dog duo add character to this charming place and there’s always a bargain to be had and an opportunity to haggle!",
        "icon": {
            "iconUrl": "img/snp-icon.png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }

},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124776, 51.499112]},
    "properties": {
        "name": "Nick Clegg",
        "date": "28th October 2015",
        "description": "The hand painted signage is visible throughout the vast stairways and hidden nooks and crannies. There’s rarely two items the same (chesterfield an exception) and an overwhelming amount of treasures to be uncovered. Ranging from antiques, vintage and secondhand items to even a ‘Kermit’ the frog amusement ride. If you favour upcycling or just wish to collect the weird and wonderful, this place is definitely worth a visit! You are likely to be greeted outside by Jim and Murphy (the border terrier) and will certainly get a warm and friendly welcome on entering. The man and dog duo add character to this charming place and there’s always a bargain to be had and an opportunity to haggle!",
        "icon": {
            "iconUrl": "img/lib-icon .png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }

}

    // Add Another Point
];



// Add custom popups to each using our custom feature properties
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;


// Create custom popup content
var popupContent =  '<div>' +
                        '<img src="' + feature.properties.image + '" />' +
                        '<div class="info">' +
                        '<h2>' + feature.properties.number + '</h2>' +
                        '<span>' + feature.properties.condition + '</span>' +
                        '</div>' +
                    '</div>';

                    var feature = e.layer.feature;

    var content = '<h2>' + feature.properties.name + '</h2>' +
                  '<h3>' + feature.properties.date + '</h3>' +
                  '<p>' + feature.properties.description + '</p>';

    info.innerHTML = content;

// http://leafletjs.com/reference.html#popup
    marker.bindPopup(popupContent,{
        closeButton: false,
        minWidth: 320
    });
});

new L.Control.Zoom({ position: 'bottomleft' }).addTo(map);

// Set a custom icon on each marker based on feature properties.
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;

    marker.setIcon(L.icon(feature.properties.icon));
});

myLayer.on('click',function(e) {
    // Force the popup closed.
    e.layer.closePopup();

    var sidebar = document.getElementById('sb')

    $('#about-holder').removeClass('active');
    $('#sb').addClass('active');
    $('nav ul li').removeClass('active');
    $('#sight-m').addClass('active');
		$('#poltical-holder').addClass('active');

    $('html, body').animate({scrollTop: $("#sb").offset().top}, 'slow');

    var feature = e.layer.feature;
    var content = '<h2>' + feature.properties.name + '</h2>' +
                  '<h3>' + feature.properties.date + '</h3>' +
                  '<p>' + feature.properties.description + '</p>';

    info.innerHTML = content;
});



// Add features to the map
myLayer.setGeoJSON(geoJson);

</script>


</body>
</html>
