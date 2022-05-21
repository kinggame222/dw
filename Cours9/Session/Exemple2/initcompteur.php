<?php
session_start();
print <<<FIN
<html>
<head>
<title>Test des sessions</title>
</head>
<body>
FIN;

if(!isset($_SESSION['nom'])) {
	echo '<h1>Erreur, pas de session</h1>';
	echo "<a href='./page1.php'>Aller a la pge 1</a>";
}
else {

	echo '<B><p style="color:rgb(255,0,0)">'; 
	echo 'Fin de session de '.$_SESSION['nom'];
	echo 'Temps: ';
	$temps=time() - $_SESSION['heure_co'];
	echo date('h:i:s',$temps).'</p></B><br>';
	$_SESSION['compt'] = 0;              // initialisation du compteur.  
// Pour détruire une variable --> unset($_SESSION['compt']);
// Pour détruire toutes les variables de la session --> $_SESSION = array()
	echo 'Compteur: ', $_SESSION['compt'], '<br>';
	
	echo "<a href='./page1.php'>Aller a la page 1</a><br><br>";
	echo "<a href='./page2.php'>Aller a la page 2</a>";
}
