<?php
include "header.php";
$recherche=$_POST['search'];
$stmt= $connexion->prepare("SELECT * FROM camp WHERE cmp_name= '$recherche'");
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