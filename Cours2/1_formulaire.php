<HTML>

<HEAD>
	<TITLE>Je suis une formulaire en HTML</TITLE>
</HEAD>

<BODY>


	<form action="Print.php" method="post">
		Votre nom: <input type="text" name="mon_type_text"><BR><BR>

		Vos commentaires: <BR><textarea name="mon_textarea" id="toto"></textarea><BR><BR>

		Veuillez choisir:<BR>
		<select name="mon_select">
			<option value="1">1er choix</option>
			<option value="2">2ième choix</option>
			<option value="3">3ième choix</option>
		</select>
		<BR>
		<BR>

		Choix1 <input type="radio" name="mon_type_radio" value="1">
		Choix2 <input type="radio" name="mon_type_radio" value="2">
		Choix3 <input type="radio" name="mon_type_radio" value="3"><BR><BR>

		ChoixA <input type="checkbox" name="mon_type_checkbox[]" value="1">
		ChoixB <input type="checkbox" name="mon_type_checkbox[]" value="2">
		ChoixC <input type="checkbox" name="mon_type_checkbox[]" value="3"><BR><BR><BR>

		<input type="submit" name="valider" value="OK">

	</form>

</BODY>

</HTML>