<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Contact Anne-Miek Osteopathie Amsterdam";
	$description = "contact informatie Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>


<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Contact</h2>
	
	<p>e-mail: <a href="mailto:info@anne-miek.com">info@anne-miek.com</a></p>
	<p>telefoon: 06-25505914</p>
	
	<h2>Locaties:</h2>
	<p>Op <span class="bold italic">vrijdags</span> werk ik in:</p>
	<p>Integrale Huisartsenpraktijk West</p>
	<p>Witte de Withstraat 11</p>
	<p>1057 XE Amsterdam</p>
	<br>
	<p>Op <span class="bold italic">dinsdag</span> en <span class="bold italic">woensdag</span> :</p>
	<p>Brouwersgracht 214-hs</p>
	<p>1013 HD Amsterdam</p>
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