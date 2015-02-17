<?php
	
	include_once("header.php");

	function createcamp($connexion, $login, $pwd, $name, $long, $lat) {
		$password = sha256($pwd."mrtabledehachagemaisouicestclairetabelien");
		$longitude = floatval($long);
		$latitude = floatval($lat);
  	   	$insertion =  $connexion->prepare(
			"insert into compte (cpt_login, cpt_pwd)
				values ('$login','$password');\n
			insert into camp (cmp_name, cmp_long, cmp_lat)
				values ('$name','$longitude', '$latitude');"
		);
		$insertion->execute();
	}



	switch($_GET['action']) {
		case "camp":
			$login = htmlentities($_POST['login']);
			$password = htmlentities($_POST['password']);
			$name = htmlentities($_POST['name']);
			$long = htmlentities($_POST['long']);
			$long = htmlentities($_POST['lat']);
  		$res = createcamp($connexion, $login, $password, $name, $long, $lat);
	  	if($res) 
			header("Location:./");
			break;
		default:		
	}
?>
