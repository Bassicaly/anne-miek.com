<?php require($INC_DIR. "functions.php"); ?>

<!DOCTYPE html>

<html lang="nl">
<head>
	<meta charset="utf-8">
	<!-- SEO (search engine optimisation) -->
	<meta name="msvalidate.01" content="F9BEBE1E3AA8E36ACBDABD1FB23C479B" />
	<title><?php print $title ?></title>
	<!-- Use keyword-rich title, less than 60 characters -->
	
	<meta name="description" content="<?php print $description ?>">
	<!-- Use keyword-rich description, less than 160 characters -->
	<!-- END SEO -->
	
	<!-- keywords not used by Google but still, can't hurt -->
	<meta name="keywords" content="<?php print $keywords ?>">
    
    <!-- setup at least some compatability for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="<?=auto_version('/css/main.css')?>">
	<link rel="icon" type="image/png" href="/img/favicon.png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="/js/modernizr.custom.25710.js"></script>
</head>

<body>
	<div id="wrapper">
		<div class="attention"><?php require($INC_DIR. "attention.php"); ?></div>
		<header id="top_header">
			<h1>Anne-Miek Osteopathie</h1>
		</header>
