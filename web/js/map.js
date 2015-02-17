function map(position) {
	var lat= position.coords.latitude;
	var lon= position.coords.longitude;
	var centerpos = new google.maps.LatLng(lat,lon);
	var optionsGmaps = {
    center:centerpos,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: 15
	};
	var map = new google.maps.Map(document.getElementById("map"), optionsGmaps);
	var marker = new google.maps.Marker({
      position: centerpos,
      map: map,
      title:"Vous êtes ici"
    });
map.panTo(centerpos);
}

if (navigator.geolocation)
	navigator.geolocation.getCurrentPosition(map);
