<?php
include 'ConnectMySQL.php';
mysqli_set_charset($connexion, "utf8");

if (isset($_GET['action'])) {
	if ($_GET['action'] == "ajouter") {
		$sql = "INSERT INTO tblalbum (titre, code_genre, id_auteur, id_maison)
			VALUES ('" . addslashes($_POST['titre']) . "',
					'" . addslashes($_POST['genre']) . "',
					'" . addslashes($_POST['auteur']) . "',
					'" . addslashes($_POST['maison']) . "'	
					)";

		//echo $sql;
		if (mysqli_query($connexion, $sql) != false)
			print("Album <" . $_POST['titre'] . " > enregistré.<br>");
		else {
			print("Echec lors de la création de la fiche<br>");
			echo 'mysqli_error : ', mysqli_error($connexion);
		}
	}
}

?>

<form action="Formulaire_Ajout_Album.php?action=ajouter" method="POST" id="form">
	Ajouter un album : <input type="text" size=20 maxlength=20 id="searchName" name="titre">

	<?php

	// Préparer liste déroulante des Auteurs
	// -------------------------------------
	$sql = "SELECT id_auteur, nom FROM tblauteur ORDER BY nom";
	$resultat = mysqli_query($connexion, $sql);

	if (mysqli_num_rows($resultat) > 0) {
		echo 'Lister les auteurs : ';
		echo '<select name="auteur" style="width:100">';
		while ($arrayFetch = mysqli_fetch_array($resultat)) {
			$id_auteur = $arrayFetch['id_auteur'];
			$nom_auteur = $arrayFetch['nom'];
			echo "<option value=$id_auteur>$nom_auteur";
		}
		echo '</select>';
	}

	echo '<BR><BR>';
	// Préparer liste déroulante des Genres musicaux
	// ---------------------------------------------
	$sql = "SELECT code_genre, description FROM tblgenre ORDER BY description";
	$resultat = mysqli_query($connexion, $sql);
	if (mysqli_num_rows($resultat) > 0) {
		echo 'Genres musicales : ';
		echo '<select name="genre" style="width:100">';
		while ($arrayFetch = mysqli_fetch_array($resultat)) {
			$code_genre = $arrayFetch['code_genre'];
			$description = $arrayFetch['description'];

			echo "<option value=$code_genre>$description";
		}
		echo '</select>';
	}

	echo '<BR><BR>';
	// Préparer liste déroulante des Maisons Éditions
	// ---------------------------------------------
	$sql = "SELECT id_maison, nom_maison FROM tblmaison ORDER BY nom_maison";
	$resultat = mysqli_query($connexion, $sql);
	if (mysqli_num_rows($resultat) > 0) {
		echo 'Maison Edition : ';
		echo '<select name="maison" style="width:100">';
		while ($arrayFetch = mysqli_fetch_array($resultat)) {
			$id_maison = $arrayFetch['id_maison'];
			$nom_maison = $arrayFetch['nom_maison'];
			echo "<option value=$id_maison>$nom_maison";
		}
		echo '</select>';
	}

	echo '<BR><BR>';
	?>
	<input type="submit" name="ajouter" value="Ajouter un album">

</form>