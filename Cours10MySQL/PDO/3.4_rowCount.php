<?php 
// *********************************************************
// Liste des élèves mesurant plus de 180 cm
// Retourne par défaut un tableau associatif
// *********************************************************

include 'ConnectMySQLPDO.php'; // Création d'une connexion à MySQL et à la BD.  Retourne $db

$sql = "SELECT * FROM eleve3 WHERE taille >= '160'"; // Requête SQL

$result = $db->query($sql); // Exécution de la requête sur MySQL.  Retourne une ligne.

echo '<h1>', $result->rowCount(), '</h1>';

$result->closeCursor(); // on ferme le curseur des résultats							

?> 
