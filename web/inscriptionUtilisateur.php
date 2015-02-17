<?php
	include_once "header.php";
	
	function getCamps() {
		$sql = ("SELECT * FROM Camp"); 
		$camp = $sql->query;
		
		return $camp;
	}
	
	function getOrganisms() {
		$sql = ("SELECT * FROM Organism"); 
		$organism = $sql->query;
		
		return $organism;
	}

?>

<body>

		<form method="post" action="actionInscription.php">
		<section id="inscription">
			<h4>Création d'un compte de réfugié</h4>
			<fieldset >
				<label for="ident">Adresse email : </label><input type="email" name="mail" id="mail" placeholder="Adresse email" maxlength="100" required="required"> <br />
				<label for="mdp">Mot de passe : </label><input type="password" id="mdp" name="mdp" placeholder="Mot de passe" maxlength="256" required="required"> <br />
				<label for="vmdp">Vérification du mot de passe : </label><input type="password" id="vmdp" name="vmdp" placeholder="Vérification mot de passe" maxlength="256" required="required" onkeyup="mememdp();"> <br />
				<label for="nom">Nom : </label><input type="text" name="nom" id="nom" pattern="[A-Z][a-z]" placeholder="Nom" maxlength="50" required="required"> <br />
				<label for="prenom">Prénom : </label><input type="text" name="prenom" id="prenom" placeholder="Prénom" pattern="[A-Z][a-z]" maxlength="50" required="required"> <br />
								
				<?php
					$camps = getCamps();
					$organisms = getOrganisms();
					
					echo $camps;
								
/*					if (count($camps) != 0) {
					echo "<p>(Optionnel) Choisissez le camp auquel vous êtes attribué : </p>";
				
					echo "<select id=\"camp_selection\" name=\"Camp_selection\" onchange=\"\">
							<option value=\"void\"></option>";				
							foreach ($camps as $value)
								echo "<option value=\"".$values[cmp_name]."\">".$values[cmp_name]."</option>\n";
						echo "</select>\n"
						echo "<label for="arrival">Date d'arrivé : </label><input type="text" name="arrival" id="arrival" placeholder="jj-mm-aaaa" pattern="^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$" required="required"> <br />";
					}
		
					if (count($organisms) != 0) {
					echo "<p>(Optionnel) Choisissez l'organisme auquel vous êtes attribué : </p>";
						
					echo "<select id=\"organism_selection\" name=\"Organism_selection\">
							<option value=\"void\"></option>";
						foreach ($organims as $value)
								echo "<option value=\"".$values[org_name]."\">".$values[org_name]."</option>\n";
						echo "</select>";
					}
			*/	?>
				<br>
				
				<button type="submit" name="valid" value="envoyer">Valider</button>
			</fieldset>
		</section>
	<script type="text/javascript" src="js/validationmotdepasse.js"></script>
	</body>
</html>
