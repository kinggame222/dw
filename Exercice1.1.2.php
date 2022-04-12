<html>
<!-- Votre liste déroulante en manque de contenu. Vous devez modifier le script afin que la liste déroulante affiche les
	trois choix suivants: - Trudeau le peureux - Trump le crosseux - Poutine le batailleux - Macron le gagneux (*) Votre
	script est sur un serveur HTTP en Albanie. Vous avez obtenu vos informations en accédant à la base de
	donnée "President" . Vous avez obtenu les trois noms suivant: - Poutine le malade - Trump le génieu - Justin le
	peureux Vous devez OBLIGATOIREMENT mettre ses 3 président dans 3 variable est faire un echo en PHP pour afficher les
	afficher dans la liste déroulante. -->

<head>
	<title>Je débute en PHP </title>
</head>
<?php
$nom1 = 'Trudeau le peureux';
$nom2 = 'Trump le crosseux';
$nom3 = 'Poutine le batailleux ';
$nom4 = 'Macron le gagneux ';
?>

<body>
	<form action="action.php" method="post">
		Veuillez choisir:<br>
		<select name="mon_select">
			<option value="1"><?php echo $nom1; ?></option>
			<option value="2"><?php echo $nom2; ?></option>
			<option value="3"><?php echo $nom3; ?></option>
			<option value="4"><?php echo $nom4; ?></option>
		</select>
		<br>
		<br>
	</form>

</body>

</html>