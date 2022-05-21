<HTML>

<HEAD>
    <TITLE>Affichage des variables de sessions</TITLE>
</HEAD>

<BODY>

    <?php
    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo '<B>Expiration de la cache de session  : </B>', session_cache_expire(), '<br><br>';
    echo '<B>Limiteur de la cache               : </B>', session_cache_limiter(), '<br><br>';
    echo '<B>Le ID de session                   : </B>', session_id(), '<br><br>';
    echo '<B>Le nom de la session courante      : </B>', session_name(), '<br><br>';
    echo '<B>Le chemin de sauvegarde de session : </B>', session_save_path(), '<br><br>';
    echo '<B>Le ID de session                   : </B>', session_id(), '<br><br>';
    echo '<B>Module courant e la session courante: </B>', session_module_name(), '<br><br>';
    ?>

    <BR><BR>
    <a href='./1a_accueil.php'>Accueil</a>

</BODY>


</HTML>