<?php 
	include_once "header.php";
?>

<p> Voici la liste des Associations </p>
<table>
<tr><td>ID</td><td>Nom</td><td>Description</td></tr>
<?php
	//là je fais une fonction simple qui affiche toutes les assos avec leur id
	
	
	$reponses = $connexion->query('select cpt_id,org_name,org_desc from organism');
	
	while ($donnees = $reponses->fetch()){
?>
	<tr><td><?php echo $donnees['cpt_id'] ?></td><td><?php echo $donnees['org_name'] ?></td><td><?php echo $donnees['org_desc'] ?></td></tr>
<?php
}

$reponses->closeCursor();

?>
