<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Osteopatisch onderzoek";
	$description = "Er wordt onderzocht door welk bewegingsverlies het lichaam niet meer uit zichzelf herstelt.";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Onderzoek: wat gebeurt er?</h2>
	<img class="right" src="/img/nvo3.jpg" alt="een plastic lichaam met zichtebare organen" />
	<p>Een bezoek aan een osteopaat duurt drie kwartier tot een uur. De eerste keer worden er veel vragen gesteld: over de klacht, maar ook over de ziektegeschiedenis en leefgewoonten. Zo probeer ik te achterhalen welk weefsel bij u de klachten veroorzaakt en wat de oorzaak hiervan is.</p>
	<p>Daarna volgt een uitgebreid lichamelijk onderzoek. Er wordt onderzocht door welk bewegingsverlies het lichaam niet meer uit zichzelf herstelt. Dat gebeurt terwijl de patiënt in zijn of haar ondergoed afwisselend staat, zit of ligt.</p>
	<p>Als het onderzoek is afgerond bespreek ik wat er is opgemerkt, en wordt er een behandelplan opgesteld.</p>
	<p>Osteopaten werken samen met reguliere geneeskundigen. Dankzij hun opleiding herkennen osteopaten klachten die nader onderzoek vereisen door bijvoorbeeld de huisarts of de specialist. Als het nodig is, wordt er naar hen doorverwezen.</p>
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
