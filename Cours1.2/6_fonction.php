<?php

/* ==================================================
   Les fonctions 
   ==================================================   */
echo '<BR><H1>Les fonctions </H1>';  

echo '<BR><H3>Exemple fonction pourcent </H3>';   

function pourcent($x, $y)
{
	return $x * 100 / $y;
}

$valeur = var_dump(pourcent(5,50));
echo $valeur, '<BR>';

// ===================================================
// fonction salaire() et calc_impôt()
// ===================================================
echo '<BR><H3>Exemple fonction salaire </H3>'; 

function salaire($taux, $heure, $taux_impôt)
{
  $salaire_brut = ($taux * $heure);
  $mnt_impôt = $salaire_brut * ($taux_impôt / 100);
  $salaire_net = $salaire_brut - $mnt_impôt;
  return $salaire_net;
}

function calc_impôt($taux_impôt)
{
    return $taux_impôt * 1.5;
}
echo '<BR><B>Exemple de fonction </B>';
echo '<BR> Le salaire net de Pierre = ', salaire(12.75, 35, 20);
echo '<BR> Le salaire net de Jacques = ', salaire(32.15, 30, calc_impôt(30));


/* =========================================================
La visibilité des variables 
   =========================================================  */
echo '<BR><H3>Visibilité des variables dans une fonction</H3>'; 

echo '<BR><BR><B>La visibilité des variables + global </B>';  

function test() {
	$z = 7;
	global $z;
	echo '<BR> dans fonction test() : ',$z; //affiche "7" car $x appartient à la fonction test()
}

$z = 5;
echo '<BR> $z : ', $z; //affiche "5"

test();
echo '<BR> apres fonction test() : ', $z; //affiche "5" car ce $x-ci n'est plus celui de la fonction test()


/* =========================================================
   Superglobal $GLOBALS
   =========================================================  */
echo '<BR><H3>La superglobal $GLOBAL </H3>';  

function test2() {
    $var = "variable locale";
    echo '$var dans le contexte global : ' . $GLOBALS["var"] . '<BR>';
    echo '$var dans le contexte courant : ' . $var . '<BR>';
}

$var = "Exemple de contenu";
test2();
