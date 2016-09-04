// JavaScript Document

function displayMap() {
	
	if (document.getElementById('hidden2').style.display == "none") {
		document.getElementById('hidden2').style.display = "block";
		initialize();
	} else {
		document.getElementById('hidden2').style.display = "none";
			}
}

function initialize() {
  var mapOptions = {
    zoom: 6,
    center: new google.maps.LatLng( 40.415587, -3.696899),
    mapTypeId: 'hybrid'

  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  setMarkers(map, markers);
}

/**
 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.
 */
    var markers = [
        ['Madrid', 40.415587, -3.696899],
        ['Folgoso de Caurel, Lugo', 42.660751, -7.156023],
		['', 42.902191, -6.431556],
		['Ponga, Asturias', 43.199566, -5.161387],
		['Sierra Nevada, Granada', 37.077921, -3.099953],
		['Serrania de Cuenca, Cuenca', 40.365301, -1.916470],
		['Mieras, Gerona', 42.114384, 2.613460],
		['Pardinas, Gerona', 42.319411, 2.218966],
		['', 42.615519, 1.194665],
		['Alcala de los gazules, Cadiz', 36.501895, -5.553747],
		['Descargamaria, Caceres', 40.303298, -6.478928], 
		['Cardeña, Cordoba', 38.275978, -4.244297],
		['Jerez de los Caballeros, Caceres', 38.464477, -6.872239],
		['Soba, Cantabria', 43.201007, -3.527235]
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Aliquam erat</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow1.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
        ['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Phasellus et</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow2.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Aliquam erat</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow3.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Nam interdum</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow4.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Aliquam erat</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow5.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Cras ac mi</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow6.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Praesent faucibust</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow7.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Duis commodot</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow8.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Aliquam erat</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow9.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Morbi in diam</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow10.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Pellentesque non</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow10.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Sed vel felis</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow10.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Aliquam nec</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow10.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>'],
		['<div class="info_content">' + '<div class="info_header">' + 
        '<h3>Maecenas libero</h3>' + '</div>' + '<img id="info_img" src="usuarios/images/infoWindow/infoWindow10.jpg" width="100" height="100" alt=""/>' +
        '<p>Curabitur sed suscipit risus, et venenatis augue. Suspendisse volutpat vestibulum varius. Morbi et porta magna, sed eleifend quam.  Donec ut 		justo vel elit elementum eleifend.</p>' +        '</div>']

    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    

function setMarkers(map, locations) {

  for (var i = 0; i < locations.length; i++) {
    var pos = locations[i];
    var myLatLng = new google.maps.LatLng(pos[1], pos[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
    });
          // Allow each marker to have an info window    
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
				
				google.maps.event.addListener(map, 'click', function() {
        		infoWindow.close();
   				});
            }

        })(marker, i));
  }

}

google.maps.event.addDomListener(window, 'resize', initialize);


/*
 * The google.maps.event.addListener() event waits for
 * the creation of the infowindow HTML structure 'domready'
 * and before the opening of the infowindow defined styles
 * are applied.
 */
 
google.maps.event.addListener(infoWindow, 'domready', function() {

   // Reference to the DIV which receives the contents of the infowindow using jQuery
   var iwOuter = $('.gm-style-iw');

   /* The DIV we want to change is above the .gm-style-iw DIV.
    * So, we use jQuery and create a iwBackground variable,
    * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
    */
   var iwBackground = iwOuter.prev();

   // Remove the background shadow DIV
   iwBackground.children(':nth-child(2)').css({'display' : 'none'});

   // Remove the white background DIV
   iwBackground.children(':nth-child(4)').css({'display' : 'none'});

// Moves the infowindow 115px to the right.
iwOuter.parent().parent().css({left: '115px'});

// Moves the shadow of the arrow 76px to the left margin 
iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

// Moves the arrow 76px to the left margin 
iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

// Changes the desired color for the tail outline.
// The outline of the tail is composed of two descendants of div which contains the tail.
// The .find('div').children() method refers to all the div which are direct descendants of the previous div. 
iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6);'});

// Taking advantage of the already established reference to
// div .gm-style-iw with iwOuter variable.
// You must set a new variable iwCloseBtn.
// Using the .next() method of JQuery you reference the following div to .gm-style-iw.
// Is this div that groups the close button elements.
var iwCloseBtn = iwOuter.next();

// Apply the desired effect to the close button
iwCloseBtn.css({'display': 'none'});


});
	
