<?php
session_start();
if (!isset($_SESSION['nom'])) {
   echo "<h1>Demarrage de la session</h1>";
   $_SESSION['nom'] = 'Sylvain';
   $_SESSION['date_co'] = date('d-m-Y');
   $_SESSION['heure_co'] = time();
   $_SESSION['compt'] = 0;
   echo '<h3>Nom: ' . $_SESSION['nom'] . '<br>Date: ' . $_SESSION['date_co'] . '<br>Heure: ' . $_SESSION['heure_co'] . '<br>Compteur: ' . $_SESSION['compt'] . '</h3>';
}
?>
<html>

<head>
   <title>Test des sessions</title>
</head>

<body>

   <?php
   echo '<B><p style="color:rgb(255,0,0)">';
   echo 'Page 1 <BR> Temps de Session : ';
   // time() : retourne le timestamp
   $temps = time() - $_SESSION['heure_co'];
   // date() retourne une date selon un format choisi.  i-> minutes et s-> secondes
   echo date('i:s', $temps) . '<br>';
   echo 'Compteur: ', $_SESSION['compt']++, '</p></B><br>';

   echo "<a href='./page2.php'>Aller a la page 2</a><br><br>";
   echo "<a href='./decon.php'>Se deconnecter</a><br><br>";
   echo "<a href='./initcompteur.php'>Initialiser le compteur</a>";
   ?>
</body>

</html>