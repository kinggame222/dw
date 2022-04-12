<?php

/* ====================================================
le if

(*) Pour plus de clarté, indentez votre code
=======================================================*/
echo '<H2> le if</H2>';

if(2*4 > 5)
{
	echo 'strictement supérieur à 5';
	echo '   mais semble que c\'est évident';
}
else
{
	if (3 == 7)
		echo 'Heille l\'imbécile';
	else
	{
		echo 'inférieur ou égal à 5';
		echo '   tu sais pas compter ?';
	}
}

?>
