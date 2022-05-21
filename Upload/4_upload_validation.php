<html>

<body>
	<BR><BR><BR>
	<form method="POST" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
		Fichier1 : <input type="file" name="photo" size=60><BR><BR>
		<input type="submit" name="envoyer" value="Envoyer le fichier">
	</form>

</body>

</html>

<?php

// valider selon les paramètres de php.ini
// ----------------------------------------    
if (!isset($_FILES['photo'])) {  // 'photo' correspond au name du type=file
	exit;
}

if ($_FILES['photo']['error']) {          // on accède au champ erreur de superglobale $_FILES.
	switch ($_FILES['photo']['error']) {
		case 1: // UPLOAD_ERR_INI_SIZE
			echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
			break;

		case 2: // UPLOAD_ERR_FORM_SIZE
			echo "Le fichier dépasse la limite autorisée dans le formulaire HTML (MAX_FILE_SIZE) !";
			break;

		case 3: // UPLOAD_ERR_PARTIAL
			echo "L'envoi du fichier a été interrompu pendant le transfert !";
			break;

		case 4: // UPLOAD_ERR_NO_FILE
			echo "Le fichier que vous avez envoyé a une taille nulle !";
			break;

		case 6: // UPLOAD_ERR_NO_TMP_DIR
			echo "Un dossier temporaire est manquant !";
			break;

		case 7: // UPLOAD_ERR_CANT_WRITE
			echo "Échec écriture du fichier sur le disque !";
			break;

		case 8: // UPLOAD_ERR_EXTENSION
			echo "L\'envoie du fichier est arrêté par l\'extension !";
			break;
	}
} else {    // *************** pas d'erreur 
	// params
	unset($erreur);
	$extensions_ok = array('png', 'PNG', 'gif', 'GIF', 'jpg', 'JPG', 'jpeg', 'JPEG');
	$taille_max = 250000;
	$dest_dossier = 'C:/photos/';

	// vérifications des extension permises
	// strrchr trouve la dernière occurrence d'un caractère dans une chaîne
	//	echo ( substr (strrchr($_FILES['photo']['name'], '.'), 1));
	if (!in_array(substr(strrchr($_FILES['photo']['name'], '.'), 1), $extensions_ok)) {  // "toto.jpg" --> ".jpg" --> "jpg"
		$erreur = 'Veuillez sélectionner un fichier de type png, gif ou jpg !';
	} else {
		// Vérification programmée de la grosseur du fichier.
		if ($_FILES['photo']['size'] > $taille_max) {             // filesize($_FILES['photo']['tmp_name'])
			$erreur = 'Votre fichier doit faire moins de 250Ko !';
		}
	}

	// copie du fichier
	if (!isset($erreur)) {
		$dest_fichier = basename($_FILES['photo']['name']);
		// formatage nom fichier, enlever les accents
		$dest_fichier = strtr(
			$dest_fichier,
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
		);
		// remplacer les caracteres autres que lettres, chiffres et point par _
		$dest_fichier = preg_replace('/([^.a-z0-9]+)/i', '_', $dest_fichier);
		// copie du fichier
		move_uploaded_file($_FILES['photo']['tmp_name'], $dest_dossier . $dest_fichier);
		echo '<h3> Votre fichier ', $_FILES['photo']['name'], ' a été transféré correctement dans le dossier ', $dest_dossier, '</h3>';
	}
}
if (isset($erreur)) {
	echo '<p>', $erreur, '</p>';
}
echo '<pre>';
print_r($_FILES);
echo '</pre>';
setcookie("Sylvain", "", time()-3600, "/", "1", 1); 
?>
<?php 
if (isset($_COOKIE['Sylvain'])) 
	echo 'Le cookie existe ' . $_COOKIE['Sylvain'] . '<br>'; else 
	echo 'Le cookie n\'existe pas <br>'; 
?> 
