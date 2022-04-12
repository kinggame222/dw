<?php 
// *********************************************************
// Liste des élèves mesurant plus de 160 cm
// Méthode de récupération FETCH_ASSOC
// *********************************************************

include 'ConnectMySQLPDO.php'; // Création d'une connexion à MySQL et à la BD.  Retourne $db

$sql = "SELECT * FROM eleve3 WHERE taille >= '160'";  // Requête SQL

$result = $db->query($sql);  // Exécution de la requête sélection sur MySQL.  Retourne une ligne.

while($ligne = $result->fetch(PDO::FETCH_ASSOC)) // Retourne toutes les lignes du résultat. Tableau associatif.
{  
	echo '<pre>';
    print_r($ligne);
	echo '</pre>';

}

$result->closeCursor(); // on ferme le curseur des résultats							

?> 
