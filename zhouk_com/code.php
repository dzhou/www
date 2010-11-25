<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Kefei,Dan,Zhou,UPenn,Penn,seas,developer,source,code,open,java,python,c,algorithm,data,structure,neural" />
<meta name="description" content="Homepage and portfolio of Kefei Dan Zhou, University of Pennsylvania. Software/Web Developer and Entrepreneur." />
<title>kefei dan zhou : code</title>
<script type="text/javascript" src="js/niftycube2.js"></script>
<link rel="stylesheet" href="css/2.css" type="text/css"/>
<!--[if IE]><style type="text/css">
@import "css/ie_fixes.css";
</style><![endif]-->
<script type="text/javascript">
window.onload = function() {
	Nifty("div.accordion-head","all");
}
</script>
</head>
<body id="top">
<div id="container-code">
<div class="accordion-head">
<?php
include "extern_func.php";
$file = "code/" . $_GET['f'];
if (isset($_GET['f']) && $_GET['f'] != '' && file_exists($file)) {
	echo $_GET['f'];
?>
</div>
<div class="code-fyi">FYI: Some sample code may have additional dependencies.
Full source code available on request. <a href="contact.php">Contact</a> the author <a href="index.php">kefei zhou</a> (zhouk at seas.upenn.edu)</div>
<?
	echo '<pre>';
	$handle = @fopen($file, "r");
	if ($handle) {
		while (!feof($handle)) {
			$buffer = fgets($handle, 4096);
			echo htmlspecialchars($buffer);
		}
		fclose($handle);
	}
	echo '</pre>';
}
else {
	echo 'Directory list</div><br/>';
	if (isset($_GET['f']))
		echo '<span class="type-bold">! Requested file ' . $_GET['f'] . ' was not found</span><br/><br/>';
	echo '<a href="index.php">Return to homepage</a><br/><br/>';
	echo '<h2>Source code:</h2><br/>';
	$res = dirList("code/");
	foreach ($res as $file) {
		echo '> <a class="type-file" href="code.php?f=' . $file . '">' . $file . '</a><br/>';
	}
	echo '<br/>';
}
?>
<div class="accordion-head">end</div>
</div>

<div id="footer">
<p>
<div class="right"><a href="#top">Top</a></div>
Design: <a href="index.php">Kefei Dan Zhou</a><br/>
&copy Kefei D. Zhou. 2006-7. All rights reserved.
</p>
</div>
</body>
</html>
