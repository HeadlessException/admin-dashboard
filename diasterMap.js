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
      var strokeColors, fillColors;
      if(newDisaster.Disaster == "Earthquake"){
        strokeColors = "#F44336";
        fillColors = "#F44336";
      }
      else if(newDisaster.Disaster == "Flood"){
        strokeColors = "#E91E63";
        fillColors = "#E91E63";
      }
      else if(newDisaster.Disaster == "Avalanche"){
        strokeColors = "#9C27B0";
        fillColors = "#9C27B0";
      }
      else if(newDisaster.Disaster == "Drought"){
        strokeColors = "#2196F3";
        fillColors = "#2196F3";
      }
      else if(newDisaster.Disaster == "Famine"){
        strokeColors = "#009688";
        fillColors = "#009688";
      }
      else if(newDisaster.Disaster == "Landslide"){
        strokeColors = "#8BC34A";
        fillColors = "#8BC34A";
      }
      else if(newDisaster.Disaster == "Heat Wave"){
        strokeColors = "#CDDC39";
        fillColors = "#CDDC39";
      }
      else if(newDisaster.Disaster == "Cyclone"){
        strokeColors = "#69F0AE";
        fillColors = "#69F0AE";
      }
      else if(newDisaster.Disaster == "Plague"){
        strokeColors:"#FFC107";
        fillColors:"#FFC107";
      }
      else if(newDisaster.Disaster == "Cloudburst"){
        strokeColors = "#795548";
        fillColors = "#795548";
      }
      else if (newDisaster.Disaster == "Tsunami"){
        strokeColors = "#BDBDBD";
        fillColors = "#BDBDBD";
      }
      var marker=new google.maps.Marker({
        position:location
      });
      marker.setMap(map);
      var myCity = new google.maps.Circle({
        center:location,
        radius:newDisaster.Radius*1000,
        strokeColor:strokeColors,
        strokeOpacity:0.8,
        strokeWeight:2,
        fillColor:fillColors,
        fillOpacity:0.4
      });
      myCity.setMap(map);
      var infowindow = new google.maps.InfoWindow({
        content: newDisaster.Disaster
      });
      infowindow.open(map,marker);
    });
    google.maps.event.addDomListener(window, 'load', initialize);
  });