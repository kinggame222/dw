<?php

/* ========================================================
le for 
Voici comment cela se passe dans le 1'exemple :
	1 $i est initialisé à "0" ;
	2 PHP vérifie si l'instruction "$i<10" est TRUE ;
	3 Si c'est TRUE on continue, sinon la boucle est terminée ;
	4 PHP exécute le corps de la boucle ;
	5 PHP exécute l'instruction d'incrémentation : "++$i" ;
	6 Retour au 2° point.
===========================================================*/
echo '<H2> for </H2>';

//afficher tous les chiffres de 0 à 9
for($i=0; $i<10; ++$i)
{
echo $i;
}
echo '<BR>';
//afficher tous les lettre de a ..
for($lettre='a'; $lettre<'z'; $lettre++)	
{
	echo $lettre, ' ';
}

/* =========================
Attention au boucle infini
============================*/
for($i=0; $i!= -1; ++$i)
{
	echo $i, '<BR>';
}


?>
