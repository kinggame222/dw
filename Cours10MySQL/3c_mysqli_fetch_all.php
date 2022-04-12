<?php 
include 'ConnectMySQL.php';

mysqli_select_db($connexion,'ecole');

// Préparation de la requête SQL (sélection)
// ------------------------------------------
$sql = "SELECT nom, prenom, taille FROM eleve WHERE taille >= '181'";

$resultat = mysqli_query($connexion, $sql);

// mysqli_fetch_all met le resultat total (ligne / colonne) dans un tableau
// ------------------------------------------------------------------------
echo '<pre>';
$resultat_tot = mysqli_fetch_all($resultat);
print_r($resultat_tot);
echo '</pre>';

echo $resultat_tot[1][1];


mysqli_close($connexion);							

?> 

