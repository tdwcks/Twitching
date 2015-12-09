<html>
<head>
<meta charset=utf-8 />
<title>Strangers Journey → Notes from the Westminster Bubble</title>
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
          <h4>Strangers Journey</h4>
          <div class="eye-icon"></div>
          <li class="tory">Conservative</li>
          <li class="labour">Labour</li>
          <li class="snp">SNP</li>  
          <li class="other">Other</li> 
          <li class="division-bell">Division Bell</li>
      </ul>

  </div>

  <div class="custom-popup" id='map'></div>

  <div id="sb" class="sidebar">

      <div class="sidebar-container">

          <h1 class="tory">Strangers Journey</h1>

          <nav>
              <ul>
                  <li id="sight-m">Sightings</li>
                  <li id="about-m" class="active">About</li>
              </ul>
          </nav>

      </div>

      <div id="about-holder" class="poltical-holder active">

          <h4>This is a map of experiences and points of interest accross Westminster.</h4>

          <p>The term stranger is the traditional way of referring to someone physically present in the Palace of Westminster who is neither a member of parliament nor a parliamentary official.</p>

          <p>Throughout the last couple of months (November - <? echo date('F'); ?>) I have taken the role of the Stranger as a way of trying to understand the english political system.</p>

          <p>If you think you can help me add more <a href="mailto:tom@tdwcks.co">Get In Touch Here</a></p>
          
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
  var map = L.mapbox.map('map', 'twcks.cigjmczaj005cu1kr594jt49m', { zoomControl: false }).setView([51.499540, -0.123510], 16);
} else {
  var map = L.mapbox.map('map', 'twcks.cigjmczaj005cu1kr594jt49m', { zoomControl: false }).setView([51.49956655, -0.12568831], 15);
};

var geolocate = document.getElementById('geolocate');

var info = document.getElementById('poltical-holder');
var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson = [{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.125260,51.499140]},
    "properties": {
        "name": "Lord Lawson",
        "date": "28th October 2015",
        "description": "Across from Westminster Hall is a gift shop and tea room, I found myself sitting down there with a cappuccino after Prime Ministers Question time. After a while a Documentary film crew sat down on the table next to me. I started to talk to the camera man Nigel.  </p><p>He was about to interview Nigel Lawson for a documentary about Britain leaving the EU. I asked if he needed a hand carrying any of the equipment. They did and so I found myself in a media room opposite Margaret Thatchers old office with her chancellor.",
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
    "geometry": { "type": "Point", "coordinates": [-0.121880, 51.506245]},
    "properties": {
        "name": "Division Bell - Hispaniola Restaurant",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }

},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.131085, 51.500034]},
    "properties": {
        "name": "Division Bell - St. Ermin's Hotel",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.137608, 51.498277]},
    "properties": {
        "name": "Division Bell - St. James' Court, A Taj Hotel",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124111, 51.506071]},
    "properties": {
        "name": "Division Bell - National Liberal Club",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.138112, 51.507774]},
    "properties": {
        "name": "Division Bell - Green's Restaurant and Oyster Bar",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.133402, 51.500361]},
    "properties": {
        "name": "Division Bell - St. Stephens Club",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.125774, 51.502038]},
    "properties": {
        "name": "Division Bell - Red Lion Public House",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.129776, 51.497389]},
    "properties": {
        "name": "Division Bell - The Cinnamon Club",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124358, 51.505757]},
    "properties": {
        "name": "Division Bell - Royal Horseguard Hotel",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.137908, 51.498865]},
    "properties": {
        "name": "Division Bell - Quillon Restaurant",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.137200, 51.484977]},
    "properties": {
        "name": "Division Bell - Pomegranate Restaurant",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.140290, 51.493114]},
    "properties": {
        "name": "Division Bell - Kyms Restaurant",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.126364, 51.496902]},
    "properties": {
        "name": "Division Bell - Quirinalet",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.127223, 51.495325]},
    "properties": {
        "name": "Division Bell - Marquis of Granby",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.1249527, 51.50155]},
    "properties": {
        "name": "Jason McCartney MP",
        "date": "1st December 2015",
        "description": "I arranged to meet Jason McCartney in Portculis House here are some interesting snippets from the interview:</p><p>- At a carpark he will always allow someone else to go first because he get’s recognised constantly aware of how it looks.</p><p>- Challenged Nick Robinson about why he says MP’s are going for their 7 weeks summer holidays. JM “Most people will go away for a couple of weeks but the rest will be working” NR: “I know that it’s just something we say.”</p><p>- They work for you simplifies too much, when tomorrow he votes for air strikes it won’t show more nuanced question.</p><p>- Bercow needs to stand up for politicians and politics - Should be the Shop Steward.",
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
    "geometry": { "type": "Point", "coordinates": [-0.125924, 51.49692]},
    "properties": {
        "name": "Andrew Neil",
        "date": "3rd December 2015",
        "description": "I was walking out of 4 Millbank which is where the Daily Politics is filmed, Andrew Neil was just ahead of me. </p><p> I caught him up and said “Excuse me Mr Neil very sorry to bother you but just wanted to say how much I enjoyed your Monologue at the start of This Week.” He looked at me and smiled with his very bright white teeth and said “Ah Thank you very much”",
        "icon": {
           "iconUrl": "img/other-icon.png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124347, 51.500221]},
    "properties": {
        "name": "Ed Milliband MP",
        "date": "7th December 2015",
        "description": "I was sitting inside Westminster Hall on a bench.</p><p>Ed Miliband walked in to the hall and climbed up the stairs towards a room from which was playing christmas music.",
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
    "geometry": { "type": "Point", "coordinates": [-0.125892, 51.496514]},
    "properties": {
        "name": "Leanne Wood AM",
        "date": "7th December 2015",
        "description": "Inside 4 Millbank downstairs from ITN and the BBC is a coffee shop where politicans go for refreshment before media interviews.</p><p>Leanne Wood was on a sofa surrounded by her special advisors drinking a cappucino.",
        "icon": {
           "iconUrl": "img/other-icon.png",
            "iconSize": [30, 30], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
},
{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [-0.124229, 51.499967]},
    "properties": {
        "name": "Tom Watson MP",
        "date": "7th December 2015",
        "description": "We were walking down the stairs from St Stephens Chapel and Tom Watson was walking in the opposite direction from the room filled with christmas music.</p><p>He knew we recognised us but he continued walking wanting to get on with his day.",
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
    "geometry": { "type": "Point", "coordinates": [-0.124229, 51.499967]},
    "properties": {
        "name": "Tom Watson MP",
        "date": "7th December 2015",
        "description": "We were walking down the stairs from St Stephens Chapel and Tom Watson was walking in the opposite direction from the room filled with christmas music.</p><p>He knew we recognised him but he continued walking to continue his evening uninterupted.",
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
    "geometry": { "type": "Point", "coordinates": [-0.125817, 51.498324]},
    "properties": {
        "name": "Sadiq Khan",
        "date": "25th November 2015",
        "description": "It was Budget day and I was walking in the area between college green and westminster. High profile politicians were constantly walking to college green.</p><p>Sadiq Khan came towards me and I asked him how becoming mayor was going. He looked grumpy and said “Alright Thanks” then his special advisor ushered me away.",
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
    "geometry": { "type": "Point", "coordinates": [-0.125785, 51.498665]},
    "properties": {
        "name": "Lord Prescott",
        "date": "1st December 2015",
        "description": "I was walking from Four Millbank towards Parliament, Baron Prescott, of Kingston upon Hull was on the road opposite. He waved at me and I waved back.",
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
    "geometry": { "type": "Point", "coordinates": [-0.129765, 51.500482]},
    "properties": {
        "name": "Division Bell - Westminster Arms",
        "date": "-",
        "description": "The bell is used in the immediate neighbourhood of Palace of Westminster (which houses Parliament) to signal that a division is occurring and that members of the House of Commons or of the House of Lords have eight minutes to get to their chosen Division Lobby to vote for or against the resolution. </p><p>As some Members may be in nearby offices, restaurants, pubs or shops, some of these have their own division bells connected to those in the Houses of Parliament; others will use a system of pagers co-ordinated by the Whip's office of each party.",
        "icon": {
            "iconUrl": "img/bell-icon.svg",
            "iconSize": [17, 17], // size of the icon
            "iconAnchor": [30, 30], // point of the icon which will correspond to marker's location
            "popupAnchor": [-15, -40], // point from which the popup should open relative to the iconAnchor
        }
    }
}
  // Add Another Point
];

// Geolocation Fun! 



function addGeoJsonFeatureAndUpdate(featureIn){
    geoJson.push(featureIn);
    myLayer.setGeoJSON(geoJson);
    myLayer.addTo(map)
}

function getCenter(queryString){
    $.getJSON('http://api.tiles.mapbox.com/v4/geocode/mapbox.places/' +queryString + '.json?' + 'access_token=pk.eyJ1IjoidGR3Y2tzIiwiYSI6IlhwMGlGR28ifQ.irq5Rbn1WvGb_VIwn1auNA',"", function(resp,status) { 
        centerFeature = resp.features[0];
        zoomMap({
            lat: centerFeature.center[1],
            lon: centerFeature.center[0]
        });
    });
};
function zoomMap(center){
   map.setView([center.lat, center.lon], 17);
   mapCenter = center
}

function formSubmitZoom(){
    getCenter($("#sign-up-location").val())
};

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
