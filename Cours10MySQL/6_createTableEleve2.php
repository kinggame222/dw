<?php 
include 'ConnectMySQL.php';

mysqli_query($connexion, "CREATE DATABASE IF NOT EXISTS ecole");
mysqli_select_db($connexion, 'ecole');   							// sélection de la base

$sql = "CREATE TABLE IF NOT EXISTS eleve2 (						
	ideleve int(10) unsigned NOT NULL auto_increment,
	nom varchar(64) NOT NULL default '',
	prenom varchar(64) NOT NULL default '',
	sexe varchar(1) NOT NULL default 'H',
	naissance date NOT NULL default '1901-01-01',
	tel varchar(10) NOT NULL default '',
	taille int(10) unsigned NOT NULL default '0',
	photo varchar(64) NULL,
	PRIMARY KEY (ideleve),
	KEY nom (nom)
	)";
	
mysqli_query($connexion, $sql);						// envoie de la requête

mysqli_close($connexion);							// fermeture de la connexion

echo 'La table < eleve > créee';

?> 
