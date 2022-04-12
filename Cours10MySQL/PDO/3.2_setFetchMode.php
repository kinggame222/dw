<?php 
// *********************************************************
// Liste des élèves mesurant plus de 180 cm
// Méthode de récupération FETCH_OBJ
// *********************************************************

include 'ConnectMySQLPDO.php'; // Création d'une connexion à MySQL et à la BD.  Retourne $db

$sql = "SELECT * FROM eleve3 WHERE taille >= '180'"; // Requête SQL

$result = $db->query($sql); // Exécution de la requête sur MySQL.  Retourne une ligne.

$result->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet

while( $ligne = $result->fetch() ) // on récupère la liste des membres
{
	echo '<pre>';
    print_r($ligne);
	echo '</pre>';
}

$result->closeCursor(); // on ferme le curseur des résultats							

?> 
