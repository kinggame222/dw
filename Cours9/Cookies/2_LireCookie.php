<html>

<body>
	<table border="3">
		<TR>
			<TD>
				<H2>La super Global $_COOKIE</H2>
			</TD>
		</TR>
		<TR>
			<TD>
				<H2>Lire et afficher les cookies</H2>
			</TD>
		</TR>
	</table>
	<BR>


	<?php
	// test l'existance d'un cookie appelé "nom_cookie" 
	if (isset($_COOKIE['Sylvain']))
		echo 'Le cookie existe ' . $_COOKIE['Sylvain'] . '<br>'; // affiche le contenu du cookie
	else
		echo 'Le cookie n\'existe pas <br>';

	if (isset($_COOKIE['Nathan']))
		echo 'Le cookie existe ' . $_COOKIE['Nathan'] . '<br>'; // affiche le contenu du cookie
	else
		echo 'Le cookie Adil n\'existe pas <br>';

	?>

	<pre>
<?php print_r($_COOKIE);  // affiche tous les cookies disponible 
?>
</pre>

</body>

</html>