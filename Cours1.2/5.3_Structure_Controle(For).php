<?php

/* ========================================================
le for 
Voici comment cela se passe dans le 1'exemple :
	1 $i est initialis� � "0" ;
	2 PHP v�rifie si l'instruction "$i<10" est TRUE ;
	3 Si c'est TRUE on continue, sinon la boucle est termin�e ;
	4 PHP ex�cute le corps de la boucle ;
	5 PHP ex�cute l'instruction d'incr�mentation : "++$i" ;
	6 Retour au 2� point.
===========================================================*/
echo '<H2> for </H2>';

//afficher tous les chiffres de 0 � 9
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
/*
for($i=0; $i!= -1; ++$i)
{
	echo $i, '<BR>';
}
*/

?>
