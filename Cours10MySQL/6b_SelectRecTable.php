<?php 

include 'ConnectMySQL.php';
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

Sélectionner le 1er élève où le ideleve = 1.

(*) mysql_fetch_array fait avancer le pointeur à chaque fois qu'il est appelé et met le résultat du SGBD dans la $resultat.

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

mysqli_select_db($connexion, 'ecole');   							// sélection de la base

$sql = "SELECT ideleve, nom, prenom, photo FROM eleve2 WHERE ideleve = '1'";

$resultat = mysqli_query($connexion, $sql);
$eleve = mysqli_fetch_array ($resultat);
$ideleve = $eleve['ideleve'];
$nom = $eleve['nom'];
$prenom = $eleve['prenom'];
$photo = $eleve['photo'];

echo 'La photo de ', $prenom, ' ', $nom, ' est : <br>';

if(strlen($eleve['photo']) > 0)
	echo '<img width=200px height=200px src="', $photo, '"/>';
	

mysqli_close($connexion);							// fermeture de la connexion

?> 

