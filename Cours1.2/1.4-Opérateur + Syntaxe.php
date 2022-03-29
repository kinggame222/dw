<?php
/* Comparaison "==" 
   ------------ 
   L'opérateur "==" est un opérateur de comparaison de valeurs. Il ne tient pas compte du type de la valeur, puisque PHP est un langage à typage faible. 
   L'opérateur "!=" est l'inverse de "==". */
   	echo '<H3>Opérateur Comparaison ==</H3>';
	echo '<BR> 1==1 donne: ', 1==1; //affiche "1"
	echo '<BR> 1==2 donne: ', 1==2; //n'affiche rien puisque c'est faux
	echo '<BR> 1==1.0 donne: ', 1==1.0; //affiche "1" puisque ce sont deux valeurs entiéres équivalentes
	echo "<BR> '1'==1 donne: ",'1'==1.0; //affiche "1" puisque la chaîne "1" est équivalente à l'entier numérique "1"


/* Comparaison "===" 
   ------------ 
L'opérateur "===" est le même que le précèdent, sauf qu'il n'effectue pas de conversion de type. Il est donc plus rapide que l'opérateur "==" et il ne donne pas les mêmes résultats. 
L'opérateur "!==" est l'inverse de "===". */
   	echo '<H3>Opérateur Comparaison ===</H3>';
	echo '<BR> 1===1 donne: ', 1===1; //affiche "1" puisque les deux valeurs sont identiques en valeur et en type
	echo '<BR> 1===2 donne: ', 1===2; //n'affiche rien puisque c'est faux
	echo '<BR> 1===1.0 donne: ', 1===1.0; //n'affiche rien puisque le type diffère (int et float)
	echo "<BR> '1'===1.0 donne: ", '1'===1.0; //n'affiche rien puisque le type diffère (string et float)
?>

<?php
/* opérateur Arithmétique
   ---------------------- */
	echo '<H3>Opérateur Arithmétique</H3>';
	echo 1+1, ' : addition <BR>'; //addition
	echo 1-1, ' : soustraction <BR>'; //soustraction
	echo 1*1, ' : multiplication <BR>'; //multiplication
	echo 1/1, ' : division <BR>'; //division
	echo 204%10, ' : modulo <BR>'; //modulo (reste de la division)
?>

<?php
/* les parenthèses
   --------------- */
	print ('<H3>Les parenthèses</H3>');  // print (string chaîne) --> est identique à echo mais avec parenthèses 
	echo 1+2*3, '<BR>'; //affiche "7"
	echo (1+2)*3, '<BR>'; //affiche "9"
	echo (1+2)*3, '<BR>'; //affiche "9"
?>

<?php
/* affectation
   ----------- */
	echo '<H3>Affectation</H3>';  
	$x = 5;
	$x += 1; //ajoute à la valeur existante
	$x -= 2; //soustrait à la valeur existante
	$x *= 3; //multiplie la valeur existante
	$x /= 4; //divise la valeur existante
	echo $x, '<BR>'; //affiche "3"
	printf ($x); // printf (string format, variable1, variable2, ..) 
	
/* Affectation de chaine
   --------------------- */
    echo '<H3>Affectation chaine <BR></H3>';
	$str = 'texte';
	$str .= ' additionnel';   //concatène à la suite de la chaîne existante
	echo $str;                //affiche "texte additionnel"
?>

<?php
/* Incrémentation
   -------------- */
	echo '<H3>Incrémentation</H3>';  
	$x = 5;
	echo ++$x, ' : ++$x <BR>'; //incrémente puis affiche 6
	echo $x; //affiche 6
	echo '<BR>';
	
	$x = 5;
	echo $x++, ' : $x++ <BR>'; //affiche 5 puis incrémente
	echo $x; //affiche 6
	echo '<BR>';
	
	$x = 5;
	echo --$x, ' : --$x <BR>'; //réduit puis affiche 4
	echo $x; //affiche 4
	echo '<BR>';
	
	$x = 5;
	echo $x--, ' : $x-- <BR>'; //affiche 5 puis réduit
	echo $x; //affiche 4
?>

