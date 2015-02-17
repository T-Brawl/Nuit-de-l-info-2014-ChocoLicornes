<?php
include "header.php";
?>
<script>function getCamps(position) {
	var lat= position.coords.latitude;
	var long= position.coords.longitude;
	<?php
	$stmt = $connection->prepare("SELECT * FROM Camps WHERE (|/((long-cmp_long)*(long-cmp_long)+(lat-cmp_lat)*(lat-cmp_lat)) < 5)");
	$res =$stmt->execute();
	if ($res)
	{
	 	while ($ligne=$res->fetch()) {
	 		echo("<div id=\"profilCamp\">");
  			echo(" Nom du camp : $ligne[cmp_name]");
  			/*latlng = new google.maps.LatLng($ligne[cmp_lat], $ligne[cmp_long]);*/
  			echo(" Localisation : longitude : $ligne[cmp_long] lattitude : $ligne[cmp_lat]");
  			echo(" Nombre de personnes en ce moment dans le camps : $ligne[nb]");
  			echo("</div>");

		}

	}
	?>
}

if (navigator.geolocation)
	navigator.geolocation.getCurrentPosition(getCamps);
</script>
?>