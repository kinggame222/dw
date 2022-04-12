<?php 
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

(*)insérer une entré dans la table.  

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

include 'ConnectMySQL.php';

mysqli_select_db($connexion, 'ecole');   

// Préparation de la requête SQL (Insertion d'une ligne (enregistrement)
// ---------------------------------------------------------------------
$sql = "INSERT INTO eleve (nom, prenom, naissance, sexe, tel, taille) 
		VALUES ('Beaudoin', 'Migaël', '20030406', 'M', '4182754455', '277')";

echo $sql;

mysqli_query($connexion, $sql);								
mysqli_close($connexion);							

echo '<H2>Un enregistrement a été ajouté à table eleve</H2>';
