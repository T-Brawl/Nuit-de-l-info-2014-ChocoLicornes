<?php
	if(!empty($_GET['page']))
	{
		$page = $_GET['page'].".php";
	}
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>SOS Zombie</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu_style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>
	<div id="nav_barre">
		<?php
			include("navbar.php");
		?>
	</div>
	<div id="container">
		<div id="menu">
			<?php
				include("menu.php");
			?>
		</div>
		<div id="page">
			<?php
				include($page);
			?>
		</div>
		<div id="actu">
			<?php
				include("actualite.php");
			?>
		</div>
		<div id="message">
			<?php
				include("message.php");
			?>
		</div>
		<div id="map">
			<?php
				include("map.php");
			?>
		</div>
	</div>
    <script type="text/javascript" src="js/konami.js"></script> 
</body>
</html>
