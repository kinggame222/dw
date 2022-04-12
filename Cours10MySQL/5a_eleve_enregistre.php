<?php
include 'ConnectMySQL.php';
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Validation du formulaire.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

if (
	empty($_REQUEST['nom']) || empty($_REQUEST['prenom']) || empty($_REQUEST['naissance']) ||
	empty($_REQUEST['naissance']) || empty($_REQUEST['tel']) || empty($_REQUEST['taille'])
)
	die('ERREUR : Tous les champs doivent être remplis');

if ($_REQUEST['taille'] <= 100 || $_REQUEST['taille'] >= 300)
	die('ERREUR : Heille le cave, depuis quand peut-on mesurer plus de 3 mètres !!!!');

/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Enregistement de l'élève dans la table eleve.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

mysqli_select_db($connexion, 'test');
$sql = "INSERT INTO eleve (nom, prenom, naissance, sexe, tel, taille)
		VALUES ('" . addslashes($_REQUEST['nom']) . "',
				'" . addslashes($_REQUEST['prenom']) . "',
				'" . addslashes($_REQUEST['naissance']) . "',
				'" . addslashes($_REQUEST['sexe']) . "',
				'" . addslashes($_REQUEST['tel']) . "',
				'" . addslashes($_REQUEST['taille']) . "')";


if (mysqli_query($connexion, $sql) != false)
	print("eleve <" . $_REQUEST['nom'] . " > enregistré.<br>");
else {
	print("Echec lors de la création de la fiche<br>");
	echo 'mysqli_error : ', mysqli_error($connexion);
}

mysqli_close($connexion);


?>

<BR><BR>
<table border="3">
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/function.addslashes.php" target="_blank">addslashes()</a>, Retourne la configuration actuelle de l'option magic_quotes_gpc </H3>
		</TD>
	</TR>
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/function.get-magic-quotes-gpc.php" target="_blank">get_magic_quotes_gpc()</a>, Retourne la configuration actuelle de l'option magic_quotes_gpc </H3>
		</TD>
	</TR>
</table>