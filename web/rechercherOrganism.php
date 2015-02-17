<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
 <meta charset="UTF-8" />
 <title>Recherche</title>
</head>
<body>

<?php
include "header.php";
$recherche=$_POST['search'];
$stmt= $connexion->prepare("SELECT * FROM organism WHERE org_name= '$recherche'");
$stmt->execute();
while($ligne=$stmt->fetch())
{
	echo("<div id=\"profilOrganism\">");
	echo(" Nom de l'association : $ligne['org_name']");
	echo(" Description : $ligne['org_desc']");
	echo("</div>");
}
?>

</body>
</html>
