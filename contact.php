<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Contact Anne-Miek Osteopathie Amsterdam";
	$description = "contact informatie Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>


<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Contact</h2>
	<p>telefoon: 06-25505914</p>
	<p>e-mail: <a href="mailto:info@anne-miek.com">info@anne-miek.com</a></p>
	
	<p>Met vriendelijke groet,</p>
	<p>Anne-Miek de Nijs</p>
	<p>Osteopaat (Lid <a target="_blank" href="http://www.osteopathie.nl">NVO</a> en <a target="_blank" href="http://www.vnt-nederland.nl">VNT</a>)</p>
	
	</section>

	<aside id="news_left">
		<ul>
			<?php
				$var = "test";
				$als = "next";
			?>
		</ul>
	</aside>

	<aside id="news_right">
		<ul>
			
		</ul>
	</aside>
<?php require($INC_DIR. "footer.php"); ?>