$(document).ready(function() {

	var yourStartLatLng = new google.maps.LatLng(48.2642732,25.9323017,17);
	$('#map_canvas').gmap({'center': yourStartLatLng});
	$('#map_canvas').gmap('option', 'zoom', 14);
	$('#map_canvas').gmap('addMarker', { /*id:'m_1',*/ 'position': '48.2642732,25.9323017,17', 'bounds': false } ).click(function() {
                $('#map_canvas').gmap('openInfoWindow', { 'content': 'Ми тут' }, this);
        });
	
});