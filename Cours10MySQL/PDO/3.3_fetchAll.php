<?php 
// *********************************************************
// Liste des élèves mesurant plus de 180 cm
// Retourne par défaut un tableau associatif
// *********************************************************

include 'ConnectMySQLPDO.php'; // Création d'une connexion à MySQL et à la BD.  Retourne $db

$sql = "SELECT * FROM eleve3 WHERE taille >= '180'"; // Requête SQL

$result = $db->query($sql); // Exécution de la requête sur MySQL.  Retourne une ligne.

$ligneALL = $result->fetchALL(); // 

echo '<pre>';
print_r($ligneALL);
echo '</pre>';


$result->closeCursor(); // on ferme le curseur des résultats							

?> 
