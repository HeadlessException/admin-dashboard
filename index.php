
<!DOCTYPE html>
<html>
<head>
  <title>
    Disastro
  </title>
<script src="firebase.js"></script>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body container">

  <p id = "heading">Disaster Dashboard</p>
  <div class = "one">
  <form>
    <div class="form-elem">
      <label>Latitude</label>
      <input type="number" step="0.00001" id="Latitude" placeholder="Latitude" name="Latitude" required autofocus>
    </div>
    <div class="form-elem">
      <label>Longitude</label>
      <input type="number" step="0.00001" id="Longitude" placeholder="Longitude" name="Longitude" required >
    </div>
    <div class="form-elem">

      <label>Disaster</label><br>
        <div class = "dropdown">
          <select id="Disaster" placeholder="Disaster" name="Disaster" required class ="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
            <span class="caret"></span>
            <option value="Earthquake">Earthquake</option>
            <option value="Flood">Flood</option>
            <option value="Landslide">Landslide</option>
            <option value="Avalanche">Avalanche</option>
            <option value="Cyclone">Cyclone</option>
            <option value="Tsunami">Tsunami</option>
            <option value="Famine">Famine</option>
            <option value="Plague">Plague</option>
            <option value="Heat Wave">Heat Wave</option>
            <option value="Drought">Drought</option>
            <option value="Cloudburst">Cloudburst</option>

          </select>
      </div>
    </div>
    <div class='form-elem'>
      <label>Radius</label>
      <input type='number' step='0.00001' id='Radius' placeholder='Radius' name='Radius' required >
    </div>
    <div class='form-elem' id = "EarthquakeMagnitude">
      <label>Magnitude</label>
      <input type='number' step='0.001' id='Magnitude' placeholder='Magnitude' name='Magnitude' required >
    </div>
    <script>
    $("#Disaster").change(function(){
      var dis = $('#Disaster').val();
      if( dis != 'Earthquake'){
        $("#EarthquakeMagnitude").hide();
      }
      else if(dis == 'Earthquake')
      {
        $("#EarthquakeMagnitude").show();
      }
    })
    </script>
    <br><br>
    <button type="submit" class="btn btn-default btn-lg" name="submit">Submit</button><br><br>
  </form>
</div>
  <div class = "one">
    <iframe src = "map.php">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <a href="map.php"><button class = "btn btn-default btn-lg" id="btn" >View Map</button></a>
</div>
<script src="db.js"></script>
</body>
