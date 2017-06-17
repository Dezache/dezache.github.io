<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">

		<!-- Polices -->
			<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<!-- Fin Polices -->
	</head>
<body>
<?php

if (isset($_GET["map"]))
	{
		$map = $_GET["map"];
		$map = strtoupper($map);
		echo '<p id="jaaj">SERVEUR DE DEZACHE</br>MAP: ' . $map . ' </p>';
	}
else
{
	echo 'Bug';
}

?>
</body>
</html>