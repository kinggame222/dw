<html> 
<body>
<table border="3">
<TR><TD>
<H2>La super Global $_COOKIE</H2>
</TD></TR>
<TR><TD>
<H2>Lire et afficher les cookies</H2>
</TD></TR>
</table>
<BR>


<?php 
setcookie("Sylvain", "", time()-3600);   // supression du cookie 'brocoli'
?> 
<pre>
<?php print_r($_COOKIE);  // affiche tous les cookies disponible ?>
</pre>

</body> 
</html> 
