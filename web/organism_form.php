<?php
	include_once "header.php";
	
	$sqlLogin =  ('SELECT count(*) AS nb FROM Organism WHERE cpt_login = \''.$_POST['organism_email'].'\'');
	$sqlName =  ('SELECT count(*) AS nb FROM Organism WHERE org_name = \''.$_POST['organism_name'].'\'');
	
	$reqLogin = $connexion->query($sqlLogin);
	
	if ($numLogin = ($reqLogin->fetch())) 
	{
		if ($numLogin['nb']!=0)
			{
				header("Location: inscription.php?error=$errorLogin");
				exit();
			}
	}

	$reqName = $connexion->query($sqlName);
	
	if ($numName = ($reqName->fetch())) 
	{
		if ($numName['nb']!=0)
			{
				header("Location: inscription.php?error=$errorName");
				exit();
			}
	}
	
	$login = $_POST['organism_email'];
	$name = $_POST['organism_name'];
	$password = $_POST['organism_password'];
	$infos = $_POST['organism_infos'];
	
	$sql = ("INSERT INTO (cpt_login, cpt_pwd, org_name, org,desc) Organism
				VALUES ('$login','$password', '$name', '$infos'");
	$connexion->exec($sql); 
?>
