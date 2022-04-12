<?php 
include 'ConnectMySQL.php';
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Validation du formulaire.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['naissance']) ||
    empty($_POST['naissance']) || empty($_POST['tel']) || empty($_POST['taille']) )
	die ('ERREUR : Tous les champs doivent être remplis');
	
if ($_POST['taille'] <= 100 || $_POST['taille'] >= 300)
	die ('ERREUR : Heille le cave, depuis quand peut-on mesurer plus de 3 mètres !!!!');

/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Enregistement de l'élève dans la table eleve.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

mysqli_select_db($connexion,'ecole'); 
 
$sql = "INSERT INTO eleve (nom, prenom, naissance, sexe, tel, taille)
		VALUES ('".($_POST['nom'])."',
				'".($_POST['prenom'])."',
				'".($_POST['naissance'])."',
				'".($_POST['sexe'])."',
				'".($_POST['tel'])."',
				'".($_POST['taille'])."')";
			
if (mysqli_query($connexion, $sql) != false)
	print("eleve <".$_POST['nom']." > enregistré.");
else
	print("Echec lors de la création de la fiche");
		
mysqli_close($connexion);						

?> 


