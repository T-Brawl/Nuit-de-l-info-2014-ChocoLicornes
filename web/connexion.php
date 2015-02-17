<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
</head>

<body>
	<section id="identification">
		<form class="auth" action="authentification.php" method = "post">
			<label for="identifiant">Identifiant (Adresse mail) : </label>
				<input type="email" id="identifiant" name="identifiant" size="20" maxlength="100" required="required" /><br />
			<label for="mdp">Mot de passe : </label>
				<input type="password" id="mdp" name="mdp" size="20" maxlength="100" required="required" /><br />
			<button type="submit" name="valid" value="envoyer">Connexion</button>
		</form>
	</section>

	<section id="sinscrire"> <a id="inscription" href="sos_zombie.php?page=inscription"> S'inscrire ?</a> </section>

</body>

</html>
