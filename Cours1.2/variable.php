<?php
$nom='Mickaël';  // string
$age=17;  // integer
$gars=true;  // boolean
$taille=1.75;  // float
?>

<?php
echo'<p>Bonjour à tous.<br/>
Mon vrai nom n\'est pas Toto.<br/>
Mon vrai nom est '.$nom.'<br/>
J\'ai '.$age.' ans et je mesure '.$taille.'m.<br/>
Et comme mon nom l\'indique, je suis ';
if ($gars==true){
echo 'un garçon.</p>';
}
else{
echo 'une fille. </p>';
}

$user = 'Yogui';
echo $user; //affiche "Yogui"
echo '<BR>Gérer les String <BR>';
echo $user[2]; //affiche "g" : gestion de la variable comme d'un tableau de caractères
echo '<BR>';
echo $user[0]; //affiche "g" : gestion de la variable comme d'une chaîne (string)
echo '<BR>';
echo substr($user, 2, 1); //affiche "g"

?>