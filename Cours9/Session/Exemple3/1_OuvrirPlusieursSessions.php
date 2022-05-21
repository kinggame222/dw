<?php

// On ne peut ouvrir qu'une session à la fois tout en conservant les infos de d'autres sessions.

session_name('utilisateur');       // nommer la session avant la démarrer
session_start();                 // Création de la première session
$_SESSION['tel'] = '418-555-3336';

session_write_close();             // Fermeture de la première session, ses données sont sauvegardées.


session_name('admin');             // Indication du nom de la seconde session
session_start();                 // Ouverture de la seconde session
$_SESSION['adr'] = '123 rue de la Montagne';

echo 'Nom de la session : ', session_name();
echo '<BR>';
echo 'Contenu de ses variables : ', $_SESSION['adr'];

session_write_close();             // Fermeture de la 2ième session, ses données sont sauvegardées.
session_name('utilisateur');       // nommer la session avant la démarrer
session_start();                 // Réouverture de la première session

echo '<BR>';
echo 'Nom de la session : ', session_name();
echo '<BR>';
echo 'Contenu de ses variables : ', $_SESSION['tel'];
echo '<BR>';
echo 'Le statut de la session est (0-Disable, 1-None et 2-Active): ', session_status();

?>

<HTML>

<HEAD>
    <TITLE>Ouvrir plusieurs sessions</TITLE>
</HEAD>

<BODY>
    <BR><BR><BR>
    <table border="3">
        <TR>
            <TD>
                <H3><a href="http://php.net/manual/fr/function.session-name.php" target="_blank">session_name()</a>, Lit et/ou modifie le nom de la session. Par défaut, c'est PHPSESSID.</H3>
            </TD>
        </TR>
        <TR>
            <TD>
                <H3><a href="http://php.net/manual/fr/function.session-write-close.php" target="_blank">session_write_close()</a>, Écrit les données de session et ferme la session .</H3>
            </TD>
        </TR>
        <TR>
            <TD>
            </TD>
        </TR>
    </table>
</BODY>

</HTML>