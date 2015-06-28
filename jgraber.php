<?PHP
// Setzen von Titel und den Infos f&uuml;r den Seitenkopf
$page_browser_title = "Johnny Graber";
$page_meta_desc = "Alle Informationen &uuml;ber Johnny Graber.";
$page_active = "jgraber";

// Einbinden der Header.inc
include("./include/header.inc.php");

// Inhalt der eigentlichen Seite
?>
<h1>&Uuml;ber Johnny Graber</h1>
&nbsp;


<div class="row">
<div class="col-md-9">
<h2>Kontaktdaten</h2>
<TABLE class="table table-striped">
	<TR><TD>Adresse:&nbsp;&nbsp;&nbsp;&nbsp;</TD><TD>Meisenweg 1<br>2563  <a href="http://www.ipsach.ch/">Ipsach</a><br>Schweiz</TD></TR>
	<TR><TD>E-Mail:</TD><TD><a href="mailto:jg@jgraber.ch">jg@jgraber.ch</a></TD></TR>
	<TR><TD>Twitter:</TD><TD><a href="https://twitter.com/j_graber">@j_graber</a></TD></TR>
</TABLE>
</div>
<div class="col-md-3">
	<img alt="Johnny Graber" src="images/jgraber.jpg">
</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-md-12">
<h2>Zertifizierungen</h2>
<div class="col-md-3">
<img src="images/MCSD_2013_JGraber.png" alt="MCSD" width="160" height="122">
</div>
<div class="col-md-3">
<img src="images/MCPD_2013_JGraber.png" alt="MCPD" width="160" height="149">
</div>
<div class="col-md-3">
<img src="images/MS_2013_JGraber.png" alt="MS" width="160" height="131">
</div>
<div class="col-md-3">
<img src="images/MCTS_2013_JGraber.png" alt="MCTS" width="160" height="276">
</div>
</div>
</div>

<?PHP
// Einbinden der Footer.inc
include("./include/footer.inc.php");
?>