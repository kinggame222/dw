<?php
session_start();  // Récupération de la session
if(session_destroy()) {
	echo 'Votre session est maintenant détruite';    
}
else {
	echo 'Erreur, impossible de détruire votre session';
}

?>

<a href='./1a_accueil.php'>Accueil</a>