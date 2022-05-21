<?php 
	require "librairie/fonctions.lib.php";
	$bd;
	connecterBD($bd);    // appel de la fonction dans fonctions.lib.php

	$valide = true;
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == 'ajouter')
		{
			if (validerEleve())
			{
			//	header("Location:ajouterEleve.php");   
				ajouter($bd);
			}
			else
				$valide = false;
		}
	}

	include("inclus/entete.inc.html");
	echo '<br>', afficherDatePHP();
?>

<br>
<form name="frmeleve" action="index.php?action=ajouter" method="post">
<table align="center">
	<tr>
		<td> Nom : </td>
		<td>  <input type="text" name="nom" size="25"/> </td>
	</tr>
	<tr>
		<td> Prénom  : </td>
		<td> <input type="" name="prenom" size="25"/> </td>
	</tr>
	<tr>
		<td> Sexe  : </td>
		<td> <input type="" name="sexe" size="1"/> </td>
	</tr>
	<tr>
		<td> Naissance  : </td>
		<td> <input type="" name="dtn" size="25"/> </td>
	</tr>
	<tr>
		<td> téléphone  : </td>
		<td> <input type="" name="tel" size="10"/> </td>
	</tr>
	<tr>
		<td> taille (cm)  : </td>
		<td> <input type="" name="taille" size="3"/> </td>
	</tr>
	<tr>
		<td align="center" colspan = "2"> 
			<br><input type="submit" name="ajouter" value="Ajouter" />&nbsp &nbsp 
				<input type="reset" value="Annuler" /> </td>
	</tr>	
</table>

</form>

<?php 
 if (!$valide)
	print("<div class='msgErreur'>erreur !!!!!</div>");
?>

<?php
include("inclus/piedPage.inc.html");
?>		