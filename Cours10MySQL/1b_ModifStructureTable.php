<?php 

/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	Modification de la structure de la table eleve.
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

// connection au serveur MySQL
// -------------------------------
include 'ConnectMySQL.php';

mysqli_select_db($connexion, 'ecole');

// Préparation de la requête SQL (modifier structure de la table)
// -------------------------------------------------------
$sql = "ALTER TABLE eleve ADD champ_bidon INT(10) unsigned NOT NULL";

mysqli_query($connexion, $sql);								// envoie de la requête
mysqli_close($connexion);	


// ALTER TABLE eleve ADD champ_bidon INT(10) unsigned NOT NULL;
// ALTER TABLE eleve CHANGE champ_bidon2 FLOAT;
// ALTER TABLE eleve DROP champ_bidon2;
