<?php 
$USER = "chocolicornes";
$PASS = "tetNMItfSGmX";
$HOST = "pgsql.nuitinfolille.fr";
$DBNAME = "chocolicornes";

	try 
	{ 
        $connexion = new PDO("pgsql:host={$HOST};dbname={$DBNAME}", $USER, $PASS);
	} catch (PDOException $e) {
		echo ("Erreur connexion : " . $e->getMessage() );
		exit();
	}
?>
