<?php 
include 'ConnectMySQL.php';
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Validation du formulaire.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

if (is_uploaded_file($_FILES['photo'] ['tmp_name'])) {
	move_uploaded_file($_FILES['photo'] ['tmp_name'], $_FILES['photo'] ['name']);
	print("<center><img src='".$_FILES['photo'] ['name']. "' WIDTH=200 HEIGHT=200></center><hr>");
}
else {
	die ("ERREUR : problème d'envoi de fichier");
}

if (empty($_REQUEST['nom']) || empty($_REQUEST['prenom']) || empty($_REQUEST['naissance']) ||
	empty($_REQUEST['tel']) || empty($_REQUEST['taille']) )
	die ('ERREUR : Tous les champs doivent être remplis');
	
if ($_REQUEST['taille'] <= 100 || $_REQUEST['taille'] >= 300)
	die ('ERREUR : Heille le cave, depuis quand peut-on mesurer plus de 3 mètres !!!!');

/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Enregistement de l'élève dans la table ecole.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

mysqli_select_db($connexion, 'ecole');   // sélection de la base
$sql = "INSERT INTO eleve2 (nom, prenom, naissance, tel, taille, photo)
		VALUES ('".$_REQUEST['nom']."',
				'".$_REQUEST['prenom']."',
				'".$_REQUEST['naissance']."',
				'".$_REQUEST['tel']."',
				'".$_REQUEST['taille']."',
				'".$_FILES['photo']['name']."')";
				
// mysqli_insert_id :  Retourne l'identifiant automatiquement généré utilisé par la dernière requête
// -------------------------------------------------------------------------------------------------
echo $sql;
if (mysqli_query($connexion, $sql) != false) {
	$ideleve = mysqli_insert_id($connexion);
	echo 'mysqli_insert_id :', $ideleve, '<br>';
	print("eleve [$ideleve] <".$_REQUEST['nom']." > enregistré.");
}
else
	print("Echec lors de la création de la fiche");
		
mysqli_close($connexion);							

?> 