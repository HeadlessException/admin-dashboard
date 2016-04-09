
<!DOCTYPE html>
<html>
<head>
  <title>
    Disastro
  </title>
<script src="firebase.js"></script>
<script src="jquery.min.js"></script>
</head>
<body>
  <form>
    <div class="form-elem">
      <label>Latitude</label>
      <input type="number" step="0.00001" id="Latitude" placeholder="Latitude" name="Latitude" required autofocus>
    </div>
    <div class="form-elem">
      <label>Longitude</label>
      <input type="number" step="0.00001" id="Longitude" placeholder="Longitude" name="Longitude" required>
    </div>
    <div class="form-elem">
      <label>Disaster</label>
      <select id="Disaster" placeholder="Disaster" name="Disaster" required>
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
    <div class='form-elem'>
      <label>Radius</label>
      <input type='number' step='0.00001' id='Radius' placeholder='Radius' name='Radius' required>
    </div>
    <div class='form-elem' id = "EarthquakeMagnitude">
      <label>Magnitude</label>
      <input type='number' step='0.001' id='Magnitude' placeholder='Magnitude' name='Magnitude' required novalidate>
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
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
  <a href="map.php"><button class = "btn btn-default">View Map</button></a>
<script src="db.js"></script>
</body>
