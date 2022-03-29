<?php
/* ================================================================
L'opérateur "==" est un opérateur de comparaison de valeurs. Il ne tient pas compte du type de la valeur, puisque
PHP est un langage à typage faible. L'opérateur "!=" est l'inverse de "==".
=================================================================== */

echo '<H2> opérateur de comparaison == </H2>';
echo 10==10,'<BR>'; //affiche "1"
echo 10!=10,'<BR>'; //n'affiche rien puisque c'est faux
echo 10==20,'<BR>'; //n'affiche rien puisque c'est faux
echo 10==10.0,'<BR>'; //affiche "1" puisque ce sont deux valeurs entières équivalentes
echo '10'==10.0,'<BR>'; //affiche "1" puisque la chaîne "1" est équivalente à l'entier numérique "1"
echo '10'=='10.0','<BR>'; //affiche "1" puisque leur valeur numérique évalue à la même valeur entière
?>

<?php
/* ================================================================
Condition ternaire "?"
=================================================================== */
echo '<H2> opérateur de comparaison ternaire ?</H2>';

echo (10==10) ? 'vrai' : 'faux';

echo '<BR>';
?>

<?php
/* ================================================================
Comparaison logique (&& || and or)
=================================================================== */
echo '<H2> Comparaison logique ?</H2>';

$variable = 1;
if($variable > 2 and $variable < 10)
{
    echo '(1) valeur entre 2 et 10 <BR>';
}

if($variable > 2 && $variable < 10)
{
    echo '(2) valeur entre 2 et 10 <BR>';
}

if($variable > 2 or $variable < 10)
{
    echo '(3) valeur supérieure à 2 ou inférieure à 10 <BR>';
}

if($variable > 2 || $variable < 10)
{
    echo '(4) valeur supérieure à 2 ou inférieure à 10 <BR>';
}

?>
