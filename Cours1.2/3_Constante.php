<?php
echo '<BR><H4>Une constante est un nom qui permet de donner une sémantique à une valeur. Cette valeur est figée pour toute la
durée de l\'exécution du script PHP.    Les constantes ne sont pas limitées en termes de visibilité (scope). Une fois déclarée, une
constante est visible depuis toutes les fonctions et toutes les classes.    Par convention, en majuscule</H4>';

define('NOM_ADMIN', 'Yogui');    //constante de type string
define('MAX_LIGNES', 5);         //constante de type entier
echo 'NOM_ADMIN: ', NOM_ADMIN;
echo '<BR>MAX_LIGNES: ', MAX_LIGNES;


echo '<BR><H4>Constante système </H4>';

echo __LINE__,'<BR>';          //La ligne de code en cours ;
echo __FILE__,'<BR>';          //: Le nom complet du script en cours ;
echo __DIR__,'<BR>';           //: Le nom du répertoire du script en cours (depuis les versions 5.3 et 6.0 de PHP) ;
echo __FUNCTION__,'<BR>';      //: La fonction en cours ;
echo __CLASS__,'<BR>';         //: La classe en cours, similaire à get_class($this) ;
echo __METHOD__,'<BR>';        //: La méthode en cours ;
echo __NAMESPACE__,'<BR>';     //: L'espace de noms en cours (depuis les versions 5.3 et 6.0 de PHP).


/* Fonction utile
   --------------  */
   
if(defined('MAX_LIGNES'))
{
echo '<BR>Constante définie';
}
else
{
	echo '<BR>Constante non définie';
}

// retourne toutes les constantes
echo '<PRE>';
print_r(get_defined_constants());
echo '</PRE>';

?>
