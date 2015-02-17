<?php
	include_once "header.php";
	
	?>

		<div id="organism" >
			  
		<h4>Creation de compte d'organisme</h4>
	
		<fieldset>
			<form action="organism_form.php" method="post">
				<label for="name">Nom de l'organisme : </label> <input type="text" name="organism_name" placeholder="Nom de l'organisme" maxlength="50" required="required"><br> 
				<label for="password">Mot de passe : </label> <input type="password" name="organism_password" placeholder="Mot de passe" maxlength="256" required="required"><br> 
				<label for="email">Email : </label><input type="email" name="organism_email" placeholder="Adresse mail" maxlength="100" required="required"><br><br>
				
				<label for="infos">Informations supplémentaires sur les activités de votre organisme :</label><br>
				<textarea name="organism_infos" maxlength="250" cols="50" rows="10" required="required"></textarea><br>
				
				<input type="submit" name="organism_submit" value="Valider"><br>
			</form>
		</fieldset>
		
		</div>
	
	
