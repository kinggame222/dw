<HTML>

<HEAD>
	<TITLE>Inscrustation de PHP dans du HTML, Javascript ... - 1</TITLE>

	<SCRIPT Language="javascript">
		function fairetableau() {
			document.writeln("<TABLE BORDER=\"3\"><TR><TD WIDTH=50>Je suis du Javascript</TD><TD WIDTH=20>Javascript</TD></TR></TABLE>");
		}
	</SCRIPT>
 
</HEAD>

<BODY BGCOLOR="green" TEXT="black">

	<table BORDER="3" CELLPADDING="0" CELLSPACING="0">
		<tr>
			<TD WIDTH=50>Je suis du HTML</TD>
			<?PHP echo '<TD WIDTH=50>Je suis du PHP</TD>'; ?>
		</tr>
	</table>

	<SCRIPT Language="javascript">
		fairetableau();
	</SCRIPT>


</BODY>

</HTML>