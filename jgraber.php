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
	<TR><TD>Natel:</TD><TD><a href="tel:+41796191486">+41 (0)79 619 1486</a></TD></TR>
	<TR><TD>E-Mail:</TD><TD><a href="mailto:jg@jgraber.ch">jg@jgraber.ch</a></TD></TR>
	<TR><TD>Twitter:</TD><TD><a href="https://twitter.com/j_graber">@j_graber</a></TD></TR>
</TABLE>
</div>
<div class="col-md-3">
	<img src="images/jgraber.jpg">
</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-md-12">
<h2>Arbeit</h2>
<TABLE class="table table-striped">
	<TR><TD>seit 08. 2012</TD><TD>Applikationsentwickler bei der <a href="http://www.FMH.ch" >FMH</a></TD></TR>
	<TR><TD>09. 2008 - 07. 2012</TD><TD>Software-Ingenieur (C# / .Net) bei <a href="http://www.akros.ch" >AKROS AG</a></TD></TR>
	<TR><TD>01. 2007 - 08. 2008</TD><TD>Oracle Datenbank-Administrator bei <a href="https://www.postfinance.ch">PostFinance</a></TD></TR>
	<TR><TD>10. 2004 - 09. 2005&nbsp;&nbsp;&nbsp;&nbsp;</TD><TD>Praktikum im Bereich Oracle Datenbank-Administration bei <a href="https://www.postfinance.ch">PostFinance</a></TD></TR>
</TABLE>
</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-md-12">
<h2>Ausbildung</h2>
<TABLE class="table table-striped">
	<TR><TD>10. 2002 - 12. 2006</TD><TD>Informatikstudium an der <a href="http://www.hti.bfh.ch">HTI Biel</a></TD></TR>
	<TR><TD>08. 1998 - 07. 2002&nbsp;&nbsp;&nbsp;&nbsp;</TD><TD>Lehre als Geomatiker mit <A href="http://www.gibb.ch/">BMS</A> im <a href="http://www.bern.ch/stadtverwaltung/tvs/vma">Vermessungsamt</a> der Stadt Bern</TD></TR>
</TABLE>
</div>
</div>

<p>&nbsp;</p>

<div class="row">
<div class="col-md-12">
<h2>Zertifizierungen</h2>
<p class="zert">
<a name="zertifizierung"><img src="images/MCPD_JGraber.png" alt="MCPD" width="272" height="80"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/MCTS_JGraber.png" alt="MCTS" width="431" height="80">
</p>
</div>
</div>

<?PHP
// Einbinden der Footer.inc
include("./include/footer.inc.php");
?>