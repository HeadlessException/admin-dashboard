<!DOCTYPE html>
<html>
<head>
<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCzLsqTC8bTVYormpAoBcoxDdTBMt0xT5A"></script>-->
<script src = "Map.js"></script>
<script>
var Delhi = new google.maps.LatLng(28.6139, 77.2090);
function initialize()
{
var mapProp = {
  center:Delhi,
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var Earthquake = new google.maps.Circle({
  center:Delhi,
  radius:20000,
  strokeColor:"#0000FF",
  strokeOpacity:0.8,
  strokeWeight:2,
  fillColor:"#0000FF",
  fillOpacity:0.4
  });

Earthquake.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:100vw;height:100vh;"></div>
</body>
</html>
