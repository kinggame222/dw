<?php

session_start();
?>
<html>

<head>
   <title>Test des sessions</title>
</head>

<body>

   <?php
   if (!isset($_SESSION['nom'])) {
      echo '<h1>Erreur, pas de session</h1>';
      echo "<a href='./page1.php'>Aller a la pge 1</a><br>";
   } else {
      echo '<B><p style="color:rgb(255,0,0)">';
      echo 'Page 2 <BR> Temps de Session : ';
      $temps = time() - $_SESSION['heure_co'];
      echo date('i:s', $temps) . '<br>';
      echo 'Compteur: ', $_SESSION['compt']++, '</p></B><br>';

      echo "<a href='./page1.php'>Aller a la page 1</a><br><br>";
      echo "<a href='./decon.php'>Se deconnecter</a><br><br>";
      echo "<a href='./initcompteur.php'>Initialiser le compteur</a>";
   }
   ?>
</body>

</html>