<?php
include_once("header.php");
?>

<section id="rechercher">
	<form method="post" action="rechercherCamp.php">
		<label for="recherche"> Cherchez un camp : </label> <input type="text" name="search" required="required" >
		<button type="submit" name="rechercher" value="rechercher">Rechercher</button>
	</form>
</section>

<?php
	$stmt= $connexion->prepare("SELECT * FROM Camp GROUP BY cmp_name");
	$stmt->execute();
	while($ligne=$stmt->fetch())
	{
		echo("<div id=\"profilCamp\">");
		echo("Nom du camp : $ligne[cmp_name]");
		echo("Localisation : longitude : $ligne[cmp_long] lattitude : $ligne[cmp_lat]");
		echo("Nombre de personnes en ce moment dans le camps : $ligne[cmp_nb_persons]");
		echo("</div>");
	}
?>

