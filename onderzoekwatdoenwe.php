<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Onderzoek: wat gebeurt er?</h2>
	<p>Een bezoek aan een osteopaat duurt drie kwartier tot een uur. De eerste keer stelt de osteopaat veel vragen: over de klacht, maar ook over de ziektegeschiedenis en leefgewoonten. Zo probeert hij te achterhalen welk weefsel bij u de klachten veroorzaakt en wat de oorzaak hiervan is.</p>
	<p>Daarna volgt een uitgebreid lichamelijk onderzoek. Er wordt onderzocht door welk bewegingsverlies het lichaam niet meer uit zichzelf herstelt. Dat gebeurt terwijl de patiënt in zijn of haar ondergoed afwisselend staat, zit, en ligt.</p>
	<p>Als het onderzoek is afgerond bespreekt de osteopaat wat hij of zij heeft opgemerkt, en stelt een behandelplan op.</p>
	<p>Osteopaten werken samen met reguliere geneeskundigen. Dankzij hun opleiding herkennen osteopaten klachten die nader onderzoek vereisen door bijvoorbeeld de huisarts of de specialist. Als het nodig is, verwijst de osteopaat u naar hen door.</p>
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
