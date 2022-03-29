<html>
<head>
<title>Ma page d'accueil </title>
</head>
<body>
<h1>Bienvenue sur le site de toto </h1>
<p> Toto fait de l'anglais :</p>
<?php
echo '<p>Hello ! What is the day today ? It is '.date("l").' !</p>';

$variable = 2;
if($variable > 2 and $variable < 10)
{
	echo 'valeur entre 2 et 10 (exclus)';
}
?>

</body>
</html>

