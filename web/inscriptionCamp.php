<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
        <div id="camp">
			
		<h4>Creation de compte d'un camp</h4>
			
        <fieldset>
          <form action="createcamp.php?action=camp" method = "POST" enctype="multipart/form-data">
            <label for="ident">Identifiant : </label><input placeholder="Identifiant" type="email" id="ident" name="ident" maxlength="100" required="required"><br/>
            <label for="password">Mot de passe : </label><input type="password" placeholder="Mot de passe" id="mdp" name="password" pattern="[0-9a-zA-Z\-\_]+" maxlength="256" required="required"><br/>
            <label for="password">Vérification du mot de passe : </label><input type="password" placeholder="Vérification du mot de passe" id="mdp2" name="password2" pattern="[0-9a-zA-Z\-\_]+" onkeyup="mememdp(); return false;" maxlength="256" required="required"><br/>
            <label for="name">Nom du camp : </label><input placeholder="Nom du camp" type="text" id="name" name="name" pattern="[a-zA-Z ]+" maxlength="50" required="required"><br/>
            <label for="long">Longitude : </label><input placeholder="Longitude" type="text" id="long" name="long" pattern="[-]{0,1}[0-9]+.[0-9]+"><br/>
            <label for="lat">Latitude : </label><input placeholder="Latitude" type="text" id="lat" name="lat" pattern="[-]{0,1}[0-9]+.[0-9]+"><br/>
            <input id="envoi" type="submit" value="Valider" />
          </form>
        </fieldset>
        </div>
        <script type="text/javascript" src="js/validationmotdepasse.js"></script>
</body>
</html>
