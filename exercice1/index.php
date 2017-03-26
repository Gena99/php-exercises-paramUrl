<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice1</title>
</head>
<body>
	
	<?php
	if (isset($_GET['nom']) && isset($_GET['prenom'])) {
		echo $_GET['prenom'].$_GET['nom'].' :D';
	}
	?>
</body>
</html>