<?php 

function afficherDatePHP()
{
	$lesJours = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi");
	$lesMois = array("janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"); 
	$auj = getdate();
	$jourSemaine = $auj["wday"];
	$jourSemaine = ucfirst($lesJours[$jourSemaine]);
	$jourMois = $auj["mday"];
	$mois = $auj["mon"];
	$mois = $lesMois[$mois-1];
	$annee = $auj["year"];
	print("$jourSemaine, le $jourMois $mois $annee");
}

function connecterBD($bd)
{
	$bd = mysqli_connect("localhost", "root", "", "ecole");
	if (mysqli_connect_errno($bd))
	{
		echo "Echec lors de la connexion à Mysql : ".mysqli_connect_error();	
	}
	// $bd->set_charset("utf8");
}


function ajouter($bd) 
{
	$sql = "INSERT INTO eleve (nom, prenom, naissance, sexe, tel, taille)
			VALUES ('".addslashes($_POST['nom'])."',
					'".addslashes($_POST['prenom'])."',
					'".addslashes($_POST['dtn'])."',
					'".addslashes($_POST['sexe'])."',
					'".addslashes($_POST['tel'])."',
					'".addslashes($_POST['taille'])."')";
	//echo $sql;

	$resultat = mysqli_query($bd, $sql);
}

function supprimer($bd)
{

}

function afficher($bd)
{

}

function validerEleve() 
{
	if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dtn']) ||
    	empty($_POST['sexe']) || empty($_POST['tel']) || empty($_POST['taille']) )
		// die ('ERREUR : Tous les champs doivent être remplis');
		return false;
	else
		return true;
}
