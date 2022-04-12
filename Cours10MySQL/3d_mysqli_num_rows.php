<?php 
/* $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

(*) mysql_num_rows retourne le nombre de ligne présente dans la table.

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ */
include 'ConnectMySQL.php';

mysqli_select_db($connexion,'ecole');

// Préparation de la requête SQL (sélection)
// ------------------------------------------ 
$sql = "SELECT ideleve FROM eleve";    // obtenir tous les ideleve de la table eleve

$resultat = mysqli_query($connexion, $sql);

$nb_eleves = mysqli_num_rows($resultat);

echo "<h2>$nb_eleves élèves dans la table eleve</h2>";

mysqli_close($connexion);							

?> 

<BR><BR>
<table border="3">
<TR><TD>
<H3><a href="http://www.phpsources.org/function.mysql_num_rows.php" target="_blank">mysql_num_rows()</a>, Retourne le nombre de lignes dun résultat MySQL</H3>
</TD></TR>
<TR><TD><H4>La syntaxe:</H4>
<H4>mysql_num_rows ( resource $result )</H4></TD></TR>
</table>
