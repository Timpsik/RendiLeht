


var geocoder;
var address
  function myMap() {
	var mapExists = document.getElementById("googleMap1"); if(mapExists) {
    geocoder = new google.maps.Geocoder();
    address = aadress;
	var mapOptions1 = {
    center: new google.maps.LatLng(51.508742,-0.120850),
    zoom:9,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
	var map = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
		google.maps.event.addListener(marker,'click',function() {
			map.setZoom(14);
			map.setCenter(marker.getPosition());
  });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
	
  }
  }
 /* function codeAddress() {
    var address = document.getElementById('address').value;
	
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
  
function myMap() {
  var mapOptions1 = {
    center: new google.maps.LatLng(51.508742,-0.120850),
    zoom:9,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  
  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
 
} */