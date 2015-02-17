<?php	
	include_once("header.php");
	
	if (isset($_GET['errorLogin']))
		{
			echo "<p id=\"errorMessage\">";
			echo "Email déjà utilisée. Veuillez en choisir un autre.";
			echo "</p>";
		}
	if (isset($_GET['errorName']))
		{
			echo "<p id=\"errorMessage\">";
			echo "Ce nom d'organisation existe déjà. Veuillez en choisir un autre.";
			echo "</p>";
		}
?>

<body>
	<h3>Inscription</h3>
	
	<h4>Choisissez votre statut</h4>
	<select id="inscription" title="Choix d'inscription" onchange="
			if(this.selectedIndex == 1) { 
				show('refugee_form', 'organism_form', 'camp_form')
			} else if(this.selectedIndex == 2) {
				show('organism_form', 'refugee_form', 'camp_form')
			} else if(this.selectedIndex == 3) {
				show('camp_form', 'refugee_form', 'organism_form') };">
		<option value="void">Statut...</option>
		<option value="refugee">Réfugié</option>
		<option value="organism">Organisme</option>
		<option value="camp">Campement</option>
	</select>
	
	<div id="refugee_form" hidden="true">
		<?php 
			include 'inscriptionUtilisateur.php';
		?>
	</div>
	
	<div id="organism_form" hidden="true">
		<?php
			include 'inscriptionOrganism.php';
		?>
	</div>
	
	<div id="camp_form" hidden="true">
		<?php
			include 'inscriptionCamp.php';
		?>
	</div>
		
	<script type="text/javascript" >

	function hide(id){
		document.getElementById(id).style.display = "none";
	}
	
	function show(showId, hideId1, hideId2){
		document.getElementById(showId).style.display = "block"; 
		
		hide(hideId1);
		hide(hideId2);
	}
	
	
	</script>
	</body>
