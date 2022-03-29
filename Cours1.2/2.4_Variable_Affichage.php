<?php
/* Fonction affichage  
   ------------------  */
	$x = 5;
	echo 'avec un echo : ';
	echo $x; //affichage de la valeur
	
	echo '<BR> avec print : ';
	print $x; //affichage de la valeur
	
	echo '<BR> avec var_export() : ';
	var_export($x); //affichage de la représentation PHP
	
	echo '<BR> avec print_r() : ';
	print_r($x); //affichage du contenu
	
	echo '<BR> avec var_dump() : ';
	var_dump($x); //affichage du type et du contenu

?>

