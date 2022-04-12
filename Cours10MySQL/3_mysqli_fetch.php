<?php 
include 'ConnectMySQL.php';

mysqli_select_db($connexion,'ecole');


$sql = "SELECT * FROM eleve WHERE taille >= '181'";
$resultat = mysqli_query($connexion, $sql);

// mysqli_fetch_array fait avancer le pointeur à chaque fois qu'il est appelé
// et met le résultat (ligne) dans $eleve, (tableau numérique et associatif)
// --------------------------------------------------------------------------
echo '************ mysqli_fetch_array ***************************************<br>';
while ($eleve = mysqli_fetch_array($resultat))
{
	echo '<pre>';
	print_r($eleve);
	echo '</pre>';
	echo '<h4>', $eleve[2], ' ', $eleve[1], ' mesure ', $eleve[6], 'cm</h4>';
}


echo '************ mysqli_fetch_assoc ***************************************<br>';
$resultat = mysqli_query($connexion, $sql);

// mysqli_fetch_assoc (tableau associatif seulement)
// -------------------------------------------------
while ($eleve = mysqli_fetch_assoc($resultat))
{
	echo '<pre>';
	print_r($eleve);
	echo '</pre>';
	echo '<h4>', $eleve['prenom'], ' ', $eleve['nom'], ' mesure ', $eleve['taille'], 'cm</h4>';
}

echo '************ mysqli_fetch_row ***************************************<br>';
$resultat = mysqli_query($connexion, $sql);

// mysqli_fetch_row (tableau numérique seulement)
// ---------------------------------------------
while ($eleve = mysqli_fetch_row($resultat))
{
	echo '<pre>';
	print_r($eleve);
	echo '</pre>';
	print_r(mysqli_fetch_lengths($resultat));
	$longueur_champs = mysqli_fetch_lengths($resultat);
	echo '<h4>La longeur du nom (', $eleve['1'], ') est de ', $longueur_champs[1], ' caractère</h4>';
	
}

mysqli_close($connexion);							

?> 
