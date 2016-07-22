var URL = 'https://glowing-inferno-197.firebaseio.com/';
var database = new Firebase(URL);

function funct1()
{
  var lat = $('#Latitude').val();

  var long = $('#Longitude').val();

  var disaster = $('#Disaster').val();

  var radius = $("#Radius").val();


  if(disaster == 'Earthquake'){
    disaster = 'Magnitude ' + $('#Magnitude').val() + ' ' + disaster;
  }

  var update = database.child("Disaster");

  var d = new Date();
  var t_millis = d.getTime();

  update.push({
      Latitude: lat,
      Longitude: long,
      Disaster: disaster,
      Radius: radius,
      Time: t_millis
  });

}
var submit = document.getElementsByTagName('button')[0];

submit.onclick = funct1;
