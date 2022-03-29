<?php
echo '<P><H4> PHP est faiblement typé, ce qui signifie qu\'une variable peut changer de type dynamiquement durant son exécution. 
      Une variable doit débuter par un $.  Sensible à la casse. Référence: yogui-php-cours.pdf page 23 </h4>';

$nom='Sylvain';  // string
echo '$nom= ',$nom; 
$age=46;   // integer
echo '<BR>$age= ', $age;
$gars=true;  // boolean
echo '<BR>$gars= ', $gars;
$prof=false;
echo '<BR>$prof= ', $prof;
$taille=1.75;  // float
echo '<BR>$taille= ', $taille;

/* var_dump() et gettype 
   --------------------  */
echo '<BR><BR><H4>var_dump()</H4>';
echo '1) ',var_dump($nom);
echo '<BR>2) ',var_dump($age);
echo '<BR>3) ',var_dump($gars);
echo '<BR>4) ',var_dump($taille);

/* les variables peuvent changer de type  
   -------------------------------------  */
echo '<BR><BR><H4>Les variables peuvent changer de type</H4>';
$variable = 1;
echo '5) ',var_dump($variable);
$variable = 1.1;
echo '<BR>6) ',var_dump($variable);
$variable = 'texte';
echo '<BR>7) ',var_dump($variable);

/* settype()  
   ---------  */
echo '<BR><H4>La fonction settype() permet de modifier le type d\'une variable pendant l\'exécution du programme.</H4>';
$x = 5.2;
echo '<BR>8) ',var_dump($x); 
settype($x, 'int');
echo '<BR>9) ',var_dump($x); 

$age_texte = '25 et 2 mois';
$age = 20;
$toto = $age_texte + $age;    // erreur php
echo '<BR>10) $toto = ', $toto;



?>


