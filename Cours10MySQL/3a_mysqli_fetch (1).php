<?php 
include 'ConnectMySQL.php';

mysqli_select_db($connexion,'ecole');

// Préparation de la requête SQL (sélection)
// ------------------------------------------
$sql = "SELECT * FROM eleve WHERE taille >= '100'";

// echo $sql;

$resultat = mysqli_query($connexion, $sql);

// Technique 1 
// --------------------------------------------------------------------------
while ($eleve = mysqli_fetch_assoc($resultat))
{
	echo '<pre>';
	print_r($eleve);
	echo '</pre>';
	echo '<h4>', $eleve['prenom'], ' ', $eleve['nom'], ' mesure ', $eleve['taille'], 'cm</h4>';
	echo '<hr>';
}

mysqli_close($connexion);
