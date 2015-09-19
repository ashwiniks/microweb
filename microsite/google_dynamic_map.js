// google_dynamic_map.js file

// Map Initialize function
function initialize() 
{
	// Make an instance of Geocoder
	geocoder = new google.maps.Geocoder();
	// Set static latitude, longitude value
	var latlng = new google.maps.LatLng(28.610477906491038, 77.366463004651);
	// Set map options
	var myOptions = {
		zoom: 6,
		center: latlng,
		panControl: true,
		zoomControl: true,
		scaleControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	// Create map object with options
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	// Create and set the marker
	marker = new google.maps.Marker({
		map: map,
		draggable:true,	
		position: latlng
	});
	
	// Register Custom "dragend" Event
	google.maps.event.addListener(marker, 'dragend', function() {
		
		// Get the Current position, where the pointer was dropped
		var point = marker.getPosition();
		// Center the map at given point
		map.panTo(point);
		// Update the textbox
		document.getElementById('latitude').value=point.lat();
		document.getElementById('longitude').value=point.lng();
	});
}
