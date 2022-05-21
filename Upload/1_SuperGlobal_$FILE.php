<HTML>

<HEAD>
     <TITLE>Super global $_FILES</TITLE>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</HEAD>

</BODY>

<pre><?php print_r($_FILES); ?></pre>


<form method="POST" enctype="multipart/form-data">
     <!-- On limite le fichier à 1000Ko -->
     <input type="hidden" size=60 name="MAX_FILE_SIZE" value="1000000">
     Fichier : <input type="file" name="nom_fichier">
     
     <input type="submit" name="envoyer" value="Téléverser le fichier">
</form>

</BODY>

</HTML>