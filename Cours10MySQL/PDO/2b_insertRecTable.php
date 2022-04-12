<?php 

/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

(*)insérer une entré dans la table.  Les éléments de la table et leurs valeurs sont stockés dans des variables 

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */
include 'ConnectMySQLPDO.php';
   

$command = 'INSERT INTO';
$table = 'eleve3';
$colonnes = "nom, prenom, sexe, naissance, tel, taille";

$valeurs = "'Tremblay', 'Samuel', 'H', '19901108', '4182759999', '180'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);								

$valeurs = "'Trump', 'Donald', 'H', '1941/01/28', '5564449445', '183'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Thérèsa', 'Mère', 'F', '1913-07-06', '7784449445', '128'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Colonel', 'Sanders', 'H', '1923-07-06', '7114449445', '168'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Gates', 'Bill', 'H', '1953-07-08', '5664449445', '159'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Clinton', 'Hilary', 'F', '1943-12-08', '5664448888', '153'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Bush', 'Barbara', 'F', '1923-12-08', '5664437378', '154'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Grande', 'Ariana', 'F', '1993-11-06', '4504437378', '124'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);;

$valeurs = "'Drake', 'Drake', 'M', '1986-05-23', '6134437378', '191'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);

$valeurs = "'Trudeau', 'Justin', 'H', '1993-12-23', '8194437379', '184'";
$sql = "$command $table ($colonnes) VALUES ($valeurs)";
$db->exec($sql);
	

echo '<BR><h2>Les enregistrements ont été ajouté à table : ', $table, '</h2>';

?> 
