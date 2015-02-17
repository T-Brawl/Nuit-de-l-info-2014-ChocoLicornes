<?php
require_once "Identite.class.php";
function authentifier($login, $password) 
{
	include_once "header.php";
	$stmt=$connexion->prepare ("select ident,password from users where ident='$login' and password='$password'");
	$stmt->execute();
	if ($ligne =$stmt->fetch()) 
	{
		return new Identite($login,$ligne['name']);
	}
	else return NULL;
}


function controleAuthentification() {
	if (!(isset($_SESSION['ident']) ))
	{
	$ident = $_REQUEST['identifiant'];
	$mdp = $_REQUEST['mdp'];
	$id=authentifier($ident,$mdp);
	if ($id != NULL)
	{
	$_SESSION['ident']=$id;
	}
	else 
		throw new Exception('Mauvaise association de nom de compte et mot de passe'); 
	}
}
?>