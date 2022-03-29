<?php
/* Transtypage  
   ---------  */
echo '<BR><H4>Transtypage</H4>';
$num = 5.2;
echo $num, '<BR>';
echo (int) $num, '<BR>';


/* Isset (test d'existence)  
   ------------------------  */
echo '<BR><H4>isset</H4>';

//$variable = 'vive PHP';

if(isset($variable))
{
//la variable existe
echo '<BR> $variable existe';
}
else
{
//la variable n'existe pas
echo '<BR> $variable n\'existe pas';
}

/* empty (test de nullité)  
   ------------------------  */
echo '<BR><H4>empty</H4>';
$nbjours = 4; 
if(empty($nbjours))
{
//la variable est nulle
echo '<BR> $nbjour est nulle';
}
else
{
//la variable est non nulle
echo '<BR> $nbjour est non nulle';
}

?>

