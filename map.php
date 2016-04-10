<!DOCTYPE html>
<html>
<head>
<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCzLsqTC8bTVYormpAoBcoxDdTBMt0xT5A"></script>-->
<script src="firebase.js"></script>
<script src="jquery.min.js"></script>
<script src = "map.js"></script>
<script>
  $(document).ready(function(){

    var location = new google.maps.LatLng(28.6139, 77.2090);
    var map;

    function initialize(){
      var mapProp = {
        center: location,
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      };
      map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    var URL = 'https://glowing-inferno-197.firebaseio.com/Disaster';
    var ref = new Firebase(URL);
    var newDisaster;
    ref.on("child_added",function(snapshot){
      newDisaster = snapshot.val();
      console.log(newDisaster);
      var location = new google.maps.LatLng(newDisaster.Latitude, newDisaster.Longitude);
      var strokeColor, fillColor;
      if(newDisaster.Disaster == "Earthquake"){
        strokeColor:"#F44336";
        fillColor:"#F44336";
      }
      else if(newDisaster.Disaster == "Flood"){
        strokeColor:"#E91E63";
        fillColor:"#E91E63";
      }
      else if(newDisaster.Disaster == "Avalanche"){
        strokeColor:"#9C27B0";
        fillColor:"#9C27B0";
      }
      else if(newDisaster.Disaster == "Drought"){
        strokeColor:"#2196F3";
        fillColor:"#2196F3";
      }
      else if(newDisaster.Disaster == "Famine"){
        strokeColor:"#009688";
        fillColor:"#009688";
      }
      else if(newDisaster.Disaster == "Landslide"){
        strokeColor:"#8BC34A";
        fillColor:"#8BC34A";
      }
      else if(newDisaster.Disaster == "Heat Wave"){
        strokeColor:"#CDDC39";
        fillColor:"#CDDC39";
      }
      else if(newDisaster.Disaster == "Cyclone"){
        strokeColor:"#69F0AE";
        fillColor:"#69F0AE";
      }
      else if(newDisaster.Disaster == "Plague"){
        strokeColor:"#FFC107";
        fillColor:"#FFC107";
      }
      else if(newDisaster.Disaster == "Cloudburst"){
        strokeColor:"#795548";
        fillColor:"#795548";
      }
      else if (newDisaster.Disaster == "Tsunami"){
        strokeColor:"#BDBDBD";
        fillColor:"#BDBDBD";
      }
      var myCity = new google.maps.Circle({
        center:location,
        radius:newDisaster.Radius,
        strokeColor:strokeColor,
        strokeOpacity:0.8,
        strokeWeight:2,
        fillColor:fillColor,
        fillOpacity:0.4
      });
      myCity.setMap(map);
    });
    google.maps.event.addDomListener(window, 'load', initialize);
  });
</script>
</head>

<body>
<div id="googleMap" style="width:100vw;height:100vh;"></div>
</body>
</html>
