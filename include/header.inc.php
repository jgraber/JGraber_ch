<!DOCTYPE html>
<html lang="de">
<!--

*******************************************************************
* (c):     2000-2014 J. Graber  -   http://www.jgraber.ch     *
* Email:   webmaster (at) jgraber.ch              *
*******************************************************************

-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Johnny Graber">
    <meta http-equiv="language" content="deutsch, de">
    <meta name="description" content="<?PHP echo $page_meta_desc; ?>">
    <meta name="copyright" content=" (c) Johnny Graber">
    <link rel="shortcut icon" href="./favicon.ico">
    <title><?PHP echo "JGraber.ch - ".$page_browser_title;?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
	
	<!-- Google Analytics -->
	<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28754106-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li <?PHP if($page_active == "index") echo 'class="active"'; ?>><a href="index.php">Start</a></li>
          <li <?PHP if($page_active == "jgraber") echo 'class="active"'; ?>><a href="jgraber.php">&Uuml;ber mich</a></li>
          <li <?PHP if($page_active == "kontakt") echo 'class="active"'; ?>><a href="kontakt.php">Kontakt</a></li>
        </ul>
        <h3 class="text-muted"><a href="index.php">JGraber.ch</a></h3>
      </div>