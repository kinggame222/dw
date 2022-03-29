<?php
$a_bool = TRUE;   // un booléen
$a_str1  = "Sylvain";  // une chaîne de caractères
$a_str2 = 'Branconnier';  // une chaîne de caractères
$an_int = 12;     // un entier
$x = '10';
$y = '8';

echo 'Le type de $a_bool est : ', gettype($a_bool); // affiche :  boolean
echo '<br>';
echo 'Le type de $a_str est : ', gettype($a_str1);  // affiche :  string
echo '<br>';
echo 'additionner $x + $y : ', $x+$y, '<br>';

// Si c'est un entier, incrément de 4
if (is_int($an_int)) 
{
    $an_int += 4;
	echo 'La type de $an_int est : ', gettype($an_int), ' et sa valeur est : ', $an_int;
}

// Instruction sur les string
echo "<BR>String: $a_bool";

?> 
