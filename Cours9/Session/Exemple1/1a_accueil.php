<HTML>

<HEAD>
   <TITLE>Les images et le texte - 3</TITLE>
</HEAD>

<BODY>

   <?php
   session_start();    // Démarrer, récupérer une seesion
   echo 'session_id (identifiant unique) : <B>', session_id(), '</B>';
   echo '<BR>';
   echo 'session_name (pour la transmission de l\'identifiant) : <B>', session_name(), '</B>';

   if (!isset($_SESSION['visite'])) {
      echo "<h3>Première visite</h3>";
      $_SESSION['visite'] = 1;
   } else {
      $_SESSION['visite']++;  // incrément de 1 visite
      echo '<H3>Vous avez visité cette page ', $_SESSION['visite'], ' fois<BR><BR></H3>';
   }
   echo '<IMG SRC="pomme.jpg" HEIGHT="150" WIDTH="150"><BR><BR>';
   echo "<a href='./1b_page1.php'>Pomme Rouge</a><br>";
   echo "<a href='./1c_Afficher_info_session.php'>Afficher les infos de la session</a><br>";
   echo "<a href='./1d_SupprimerSession.php'>Déconnexion</a><br>";
   ?>

</BODY>

</HTML>