<?php

// connection au serveur MySQL
// -------------------------------
include 'ConnectMySQL.php';

// Sélection de la base de donnée
// ------------------------------
mysqli_select_db($connexion, 'ecole');

// Préparation de la requête SQL (création d'une table)
// ----------------------------------------------------
// $sql = "CREATE TABLE IF NOT EXISTS eleve (
$sql = "CREATE TABLE eleve (						
	ideleve int unsigned NOT NULL auto_increment,
	nom varchar(30) NOT NULL default '',
	prenom varchar(30) NOT NULL default '',
	naissance date NOT NULL default '1900-01-01',
	sexe varchar(1) default 'H',
	tel varchar(10) NOT NULL default '',
	taille tinyint unsigned NOT NULL default '0',
	PRIMARY KEY (ideleve),
	KEY sexe (sexe)
	)";

// Envoie de la requête au serveur MySQL + Fermeture de la connexion du serveur MySQL
// ----------------------------------------------------------------------------------	
mysqli_query($connexion, $sql);
mysqli_close($connexion);

echo '<h2>La table eleve créee</h2>';

?>

<BR><BR>
<table border="3">
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/function.mysqli-connect.php" target="_blank">mysqli_connect()</a>, Ouvre une connexion à un serveur MySQL.</H3>
		</TD>
	</TR>
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/mysqli.select-db.php" target="_blank">mysqli_select_db()</a>, Sélectionne une base de données MySQL.</H3>
		</TD>
	</TR>
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/mysqli.query.php" target="_blank">mysqli_query()</a>, Envoie une requête à un serveur MySQL.</H3>
		</TD>
	</TR>
	<TR>
		<TD>
			<H3><a href="https://www.php.net/manual/fr/mysqli.close.php" target="_blank">mysqli_close()</a>, Ferme la connexion MySQL.</H3>
		</TD>
	</TR>
</table>