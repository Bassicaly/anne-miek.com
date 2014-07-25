<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vragenlijst baby's";
	$description = "Vragenlijst om een duidelijk beeld te krijgen van de klachten van uw baby. Dit ter voorbereiding op de behandeling";
	$keywords = "vragenlijst anamnese babys osteopathie amsterdam geschikt voor iedereen geneeswijze zachte behandeltechnieken";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Vragenlijst baby's</h2>
	<p>S.V.P. deze lijst invullen en meenemen bij uw eerste behandeling. Er wordt gewerkt aan een online formulier maar deze is nog niet beschikbaar.</p>
	<a href="/files/VragenformulierBaby.pdf" target="_blank">Vragen formulier</a>
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