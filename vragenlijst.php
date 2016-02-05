<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vragenlijst volwassenen";
	$description = "Vragenlijst om een duidelijk beeld te krijgen van uw klachten. Dit ter voorbereiding op uw behandeling";
	$keywords = "vragenlijst anamnese osteopathie amsterdam geschikt voor iedereen geneeswijze zachte behandeltechnieken";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<h2>Vragenlijst volwassenen</h2>
	<p>S.V.P. deze lijst invullen en meenemen bij uw eerste behandeling. Er wordt gewerkt aan een <a href="vragenformulier.php">online formulier</a> maar deze is nog niet beschikbaar.</p>
	<a href="/files/VragenFormulierVolwassenen.pdf" target="_blank">Vragen formulier</a>
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