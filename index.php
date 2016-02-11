<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie";
	$description = "Osteopathie: een veilige geneeswijze die meedenkt met uw lichaam en u helpt bij herstellen van klachten. Anne-Miek de Nijs in Amsterdam";
	$keywords = "osteopathie amsterdam geschikt voor iedereen geneeswijze zachte behandeltechnieken";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<h2>Osteopathie: een veilige geneeswijze die meedenkt met uw lichaam en u helpt bij herstellen van klachten.</h2>
	<br>
	<h3>Waarom Osteopathie?</h3>
	<ul>
		<li>Op zoek naar de oorzaak en niet alleen maar symptoombestrijding.</li>
		<li>Behandeling op maat want ieder mens is uniek in zijn klachten.</li>
		<li>Ook zachte behandeltechnieken en daardoor zeer geschikt voor baby&#39;s, kinderen en ouderen.</li>
		<li>Een goede aanvulling op eventuele andere behandelmethodes.</li>
	</ul>
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