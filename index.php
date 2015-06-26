<?PHP
// Setzen von Titel und den Infos f&uuml;r den Seitenkopf
$page_browser_title = "Start";
$page_meta_desc = "Die Homepage mit allen Informationen &uuml;ber Johnny Graber.";
$page_active = "index";

// Einbinden der Header.inc
include("./include/header.inc.php");

// Inhalt der eigentlichen Seite
?>

	<div class="jumbotron">
        <h1>Willkommen </h1>
        <p >Hier finden Sie eine &Uuml;bersicht zu all den verschiedenen Aktivit&auml;ten mit denen ich mich derzeit besch&auml;ftige. Sie k&ouml;nnen mich per <nobr><a href="mailto:jg@jgraber.ch">E-Mail</a></nobr>, <a href="https://twitter.com/j_graber">Twitter</a> oder &uuml;ber das <a href="kontakt.php">Kontaktformular</a> erreichen.</p>
    </div>

    <div class="row marketing">
        <div class="col-md-4">
          <h4>Programmieren</h4>
          <p>In meiner Freizeit programmiere ich gerne mit Ruby und Rails kleine Helfer und Beschleuniger. Den Code gibt es auf <a href="http://github.com/jgraber">GitHub</a>.</p>
		</div>
		<div class="col-md-4">
          <h4>Blog (Deutsch)</h4>
          <p>Seit September 2009 blogge ich &uuml;ber alles was mich im Bereich IT, B&uuml;cher und Reisen interessiert auf <a href="http://GraberJ.wordpress.com">GraberJ.wordpress.com</a>.</p>
		</div>
		<div class="col-md-4">
          <h4>Pr&auml;sentieren</h4>
          <p>Wissen vermehrt sich am schnellsten wenn man es teilt. Die Folien meiner Pr&auml;sentationen liegen auf <a href="http://speakerdeck.com/jgraber">Speaker Deck</a>.</p>
        </div>
	</div>	
	<div class="row marketing">
        <div class="col-md-4">
          <h4>Lesen</h4>
          <p>Ich lese gerne und viel. Neben Sach- und Fachb&uuml;chern darf es zur Abwechslung auch einmal ein Krimi sein. Meine aktuelle Leseliste befindet sich bei <a href="http://www.goodreads.com/review/list/26287713?shelf=read">Goodreads</a>.</p>
		</div>
		<div class="col-md-4">
          <h4>Blog (Englisch)</h4>
          <p>Um mein Englisch zu verbessern und ausgew&auml;hlte Themen eingehender zu besprechen blogge ich seit Ende 2013 zus&auml;tzlich auf <a href="http://ImproveAndRepeat.com">ImproveAndRepeat.com</a>.</p>
		</div>
		<div class="col-md-4">
          <h4>Fotografieren</h4>
          <p>Ich reise gerne in der Welt herum und mache dabei viele Fotos. Eine immer gr&ouml;sser werdende Auswahl von Landschaften gibt es auf <a href="http://www.flickr.com/photos/johnny_graber">Flickr</a>.</p>
        </div>
    </div>

<?PHP
// Einbinden der Footer.inc
include("./include/footer.inc.php");
?>