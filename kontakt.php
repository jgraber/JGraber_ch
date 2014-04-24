<?PHP
//session_start();

// Setzen von Titel und den Infos f&uuml;r den Seitenkopf
$page_browser_title ="Kontakt";
$page_meta_desc = "Nutzen Sie dieses Kontaktformular wenn Sie Johnny Graber nicht &uuml;ber seine E-Mail Adresse erreichen k&ouml;nnen.";
$page_active = "kontakt";

// Einbinden der Header.inc
include("./include/header.inc.php");

// Inhalt der eigentlichen Seite
?>

<h1>Kontaktformular</h1>
&nbsp;
<?PHP 

$hasError = false;
$formSubmit = $_POST["formSubmit"];
$name = "";
$email = "";
$mitteilung = "";
// Wurde das Formular abgeschickt?
if(isset($formSubmit)) {

	//Variablen abgreiffen
	$name = addslashes(trim($_POST["Name"]));
	$email = addslashes(trim($_POST["Email"]));
	$mitteilung = addslashes(trim($_POST["Mitteilung"]));

	if($name == '' || $email == '' || $mitteilung == '' )
	{
		echo "<div class=\"alert alert-danger\">Bitte alle Felder ausfüllen</div>";
		$hasError = true;
	}
	else
	{
		$betreff = "JGraber.ch: Mitteilung";
		$absender = "From: scripte@jgraber.ch";


		$nachricht = "Ueber das Kontaktformular wurde folgende Mitteilung verschickt:\n";
		$nachricht .= "\n$name\n$email \n";
		$nachricht .= "\n\n----------------------\nMitteilung: \n\n$mitteilung";
		$nachricht .= "\n\n----------------------";

		$ok = mail("jg@jgraber.ch",$betreff,$nachricht,$absender);

		echo "";
		if ($ok) { 
			echo '<div class="alert alert-success">Formular wurde erfolgreich verschickt.</div>';}
		else {
			echo '<div class="alert alert-danger">Formular wurde leider nicht erfolgreich verschickt. ';
			echo 'Melden Sie sich bitte &uuml;ber <a href="mailto://webmaster@jgraber.ch">webmaster@jgraber.ch</a> beim Webmaster</div>';
		}
	}
}
if(!isset($formSubmit) || $hasError){
?>
<div class="row">
<div class="col-md-12">
<form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post" class="well">
	<div class="form-group">
		<label>Name:</label>
		<input type="text" class="form-control" name="Name" placeholder="Vorname und Name" value="<?PHP echo $name; ?>">
	</div>
	<div class="form-group">
		<label>E-Mail:</label>
		<input type="text" class="form-control" name="Email" placeholder="name@provider.ch" value="<?PHP echo $email; ?>">
	</div>
	<div class="form-group">
		<label>Mitteilung:</label>
		<textarea name="Mitteilung" class="form-control" cols="45" rows="10" placeholder="Ihre Mitteilung"><?PHP echo $mitteilung; ?></textarea>
	</div>
	<div class="form-actions">
		<button type="submit" name="formSubmit" class="btn btn-success btn-primary">Senden</button>
		<button class="btn btn-danger" type="reset">L&ouml;schen</button>
	</div>
</form>
</div>
</div>

 <?PHP
 }
 ?>

<?PHP
// Einbinden der Footer.inc
include("./include/footer.inc.php");
?>