<!DOCTYPE html>
<html>

<head>
	<title>map</title>
	<link rel="stylesheet" href="js/leaflet.css" />
	<script src="js/leaflet.js"></script>
	<link rel="stylesheet" href="defaultExtenz/leaflet.defaultextent.css" />
	<script src="defaultExtenz/leaflet.defaultextent.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<!-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

	<style>
		#map {
			height: 480px;
		}
	</style>
</head>

<body>
	<p>ahi</p>
	<div id="map"></div>
</body>
<script>
	var map = L.map('map').setView([51.505, -0.09], 13);

	L.control.defaultExtent().addTo(map);

	L.Control.geocoder({
		position: 'topleft'
	}).addTo(map);

	L.control.locate().addTo(map);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
</script>>

</html>