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
	session_destroy();
	echo '<B><p style="color:rgb(255,0,0)">'; 
	echo 'Fin de session de '.$_SESSION['nom'];
	echo '<BR>Temps: ';
	$temps=time() - $_SESSION['heure_co'];
	echo date('h:i:s',$temps).'<br><br>';
	echo 'Compteur: ', $_SESSION['compt'], '</p></B><br>';
	
	echo "<a href='./page1.php'>Aller a la pge 1</a><br><br>";
	echo "<a href='./page2.php'>Aller a la pge 2 (fonctionne pas car vous n'avez plus de session)</a><br>";
}
