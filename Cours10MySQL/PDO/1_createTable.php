<?php 

// connection au serveur MySQL
// -------------------------------
include 'ConnectMySQLPDO.php';	

// Préparation de la requête SQL (création d'une table)
// ----------------------------------------------------
$sql = "CREATE TABLE eleve3 (						
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
$db->exec($sql);


echo '<h2>La table eleve3 créee</h2>';
 
?> 
