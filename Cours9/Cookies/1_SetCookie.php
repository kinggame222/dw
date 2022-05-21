<html>

<body>
	<table border="3">
		<TR>
			<TD>
				<H2>setCookie</H2>
				<h3>Un cookie est un fichier que le serveur envoi sur la machine de l'utilisateur.
					Il est souvent utilisé pour reconnaitre les utilisateurs.</h3>
				<h3>La fonction setcookie() est utilisé pour créer 1 cookie.</h3>
				<h3>IMPORTANT : La fonction setcookie() doit être placé avant tout code HTML,
					car le cache du navigateur doit être vide pour que cette fonction marche convenablement.</h3>
			</TD>
		</TR>
		<TR>
			<TD>
				<H2>La syntaxe</H2>
			</TD>
		</TR>
		<TR>
			<TD>
				<H3>setcookie(name, value, expire, path, domain)</H3>
			</TD>
		</TR>
		<TR>
			<TD>
				<H4> 1-name: le nom du cookie</h4>
				<H4> 2-value: la valeur du cookie</h4>
				<H4> 3-expire: expiration en seconde</h4>
				<H4> 4-path: Il définit le chemin pour lequel le cookie
					est valable sur ce domaine, et sera donc envoyé par le client. Par défaut, il vaut "/",
					ce qui veut dire que le cookie sera fournit à tous les chemins du domaine actuel.
					Exemple: sbranconnier@127.0.0.1/SiteUSB/siteUSB8/</h4>
				<H4> 5-domain: idem à path, mais pour le domaine et les sous-domaines</h4>
				<H4> 6-secured: False par défaut. Si "true", envoyer le cookie si la connection est sécurisé HTTPS.</h4>
				<H4> 7-HttpOnly: False par défaut. Si "true", le cookie est flaggé à HttpOnly et il sera innacessible à JavaScript.</h4>
				<BR><BR>
			</TD>
		</TR>
	</table>
	<BR>


	<?php
	// génère le cookie 
	setcookie('Sylvain', 'Le professeur', time() + 24 * 3600);
	setcookie('ss', 'Je veux une Porsche Cayman neuve', time() + 12 * 3600);
	setcookie('ndssss', 'Je suis moins bourgeois que Nathan une Civic sera ok', time() + 220, '/siteUSB7/');


	?>

</body>

</html>