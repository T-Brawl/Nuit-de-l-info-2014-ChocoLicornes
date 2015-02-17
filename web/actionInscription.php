<?php
	include_once "header.php";
	
	if ($_POST['mdp'] != $_POST['vmdp'] ) 
	{
		header("Location: inscription.php?error=$errorPassword");
		exit();
	}
	
	$sql=  ('SELECT COUNT(*) AS nb FROM User WHERE cpt_login = \''.$_POST['mail'].'\'');
	$req = $connexion->query($sql);
	if ($num= ($req->fetch())) 
	{
		if ($num['nb']!=0)
			{
			header("Location: inscription.php?error=$errorLogin");
			exit();
			}
	}
	
?>
	
	<?php
		$login=$_POST['email'];
		$password=$_POST['mdp'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		
		$sqluid = ("SELECT cpt_id FROM simple_user WHERE cpt_login = '$login'");
		$userid->$query($sqluid);
		
		$sql = ("INSERT INTO (cpt_login, cpt_pwd, ut_firstname, ut_lastname) simple_user 
					VALUES('$login','$password','$prenom','$nom')");
		$connexion->exec($sql);
					
		if (isset($_POST['Camp_selection'])) {
			$arrive=$_POST['$arrival'];
			$location=$_POST['Camp_selection'];
			
			$sqlcid = ("SELECT cpt_id FROM Camp WHERE cmp_name = '$location'");
			$campid->$query($sqlcid);
			
			$sql = ("INSERT INTO (cmp_id, ut_id, liv_date_arrival, liv_date_departure) live 
						VALUES ('$campid', '$sqluid', '$arrive', null)");
			$connexion->exec($sql);
		}
		if (isset($_POST['Organism_selection']) {
			$organism=$_POST['Organism_selection'];
			
			$sqloid = ("SELECT cpt_id FROM Organism WHERE org_name = '$organism'");
			$orgid->$query($sqloid);
			
			$sql = ("INSERT INTO (org_id, ut_id) participation 
						VALUES ('$orgid', '$sqluid')");	
			$connexion->exec($sql);
		}
	?>
	
	<p>"Votre inscription a bien été pris en compte."</p>
