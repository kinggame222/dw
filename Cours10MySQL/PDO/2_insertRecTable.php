<?php 
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

(*)insérer une entré dans la table.  

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */

include 'ConnectMySQLPDO.php';
   

// Préparation de la requête SQL (Insertion d'une ligne (enregistrement)
// ---------------------------------------------------------------------
$sql = "INSERT INTO eleve3 (nom, prenom, naissance, sexe, tel, taille) 
		VALUES ('Diardéè', 'Alexis the great', '1943-04-16', 'H', '4182754455', '210')";
		
$db->exec($sql);

//echo '***Erreur :', $db->errorCode();

echo '<H2>Un enregistrement a été ajouté à table eleve</H2>'; 

?> 
