<h1>Mapa</h1>
<div id="map"></div>
    <style type="text/css">
    #map {      width:1000px;
                height:650px; }
</style>
    <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc449lrwrhWrD9QXuI6FIo2yHR-awibts&callback=initMap">
</script>
<script>
    var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 49.067784, lng: 17.472572},
    zoom: 13
  });
  
}
    </script>
    
    <script>
        var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 49.067784, lng: 17.472572},
    zoom: 16,
    scaleControl:true,
streetViewControl:true,
overviewMapControl:true
  });

  
  var infowindow = new google.maps.InfoWindow({
    content: <?php $this->skoly->locations(); 
    foreach($results as $data){$data->nazev;?>, //"ZŠ Sportovní Uherské Hradiště",
    position: {//lat: 49.067784, lng: 17.472572
        <?php  $data->geolat;?>,<?php $data->geolong;}?>  

    
    }}
  });
  infowindow.open(map);
  
   
   }
  

    </script>



