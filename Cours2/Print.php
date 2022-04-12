<pre>
<?php
// Trois méthodes de récupération
// $_GET, $_POST, $_REQUEST
// ----------------------------
print_r($_POST);
?>
</pre><br><br>

<?php
//isset = "test d'existance";
//empty = 'test de contenu', vide (null);
//------------------------------------

if (isset($_POST['mon_type_text']))
    echo '==>Existe ', ($_POST['mon_type_text']);
else
    echo 'N\'existe pas';


if (empty($_POST['mon_type_text']))
    echo '==>Vide ';
else
    echo 'Non vide', ($_POST['mon_type_text']);


if (isset($_POST['mon_type_checkbox[0]'])) {
    echo $_POST['mon_type_checkbox[0]'];
}


// Meilleur façon de récupérer les informations du formulaire
// ----------------------------------------------------------
$mon_nom = isset($_POST['mon_type_text']) ? $_POST['mon_type_text'] : '';
if ($mon_nom)
    echo 'le nom est présent';
else
    echo 'le nom est absent'

?>