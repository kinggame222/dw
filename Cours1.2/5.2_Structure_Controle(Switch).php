<?php

/* ===================================================== 
le switch
======================================================== */
echo '<H2> switch</H2>';
$choix = 2;

switch($choix)
{
	case 1:
	echo 'Choix numéro un';
	break;
	case 2:
	echo 'Choix numéro deux';
	break;
	case 3:
	echo 'Choix numéro trois';
	break;
	default:
	echo 'Choix invalide';
}

$choix = 2;

echo '<H2> clause Break + default</H2>';

$membre = 'Macron';
switch($membre)
{
	case 'Trump':
	echo 'O grand manitou';
		break;
	case 'Macron':
	case 'Diard the Great':
	case 'Gurvan le tééraire':
		echo 'pas chanceux nos Français';
		break;
	default:
		echo 'Choix invalide';
}


?>
