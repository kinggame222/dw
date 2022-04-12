<?php 
include 'ConnectMySQL.php';

mysqli_select_db($connexion,'ecole');

// Préparation de la requête SQL (sélection)
// ------------------------------------------
$sql = "SELECT * FROM eleve WHERE taille >= '130'";


// echo $sql;

$resultat = mysqli_query($connexion, $sql);

// Technique 2 
// --------------------------------------------------------------------------
$nb_eleves = mysqli_num_rows($resultat);

for ($i = 0; $i < $nb_eleves; $i++)
{
	$eleve = mysqli_fetch_assoc($resultat);
	echo '<pre>';
	print_r($eleve);
	echo '</pre>';
	echo '<h4>', $eleve['prenom'], ' ', $eleve['nom'], ' mesure ', $eleve['taille'], 'cm</h4>';
	echo '<hr>';
}

mysqli_close($connexion);							

?> 

