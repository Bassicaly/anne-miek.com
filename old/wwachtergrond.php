<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<h2>Achtergrond</h2>
	<p>Een osteopaat onderscheidt drie verschillende bewegende systemen in het lichaam. Ten eerste het bewegingsapparaat, dat bestaat uit botten, gewrichten en spieren. Ten tweede het orgaansysteem, waaronder behalve organen en hun omringende vliezen, ook bloedvaten en het lymfestelsel vallen. Tenslotte is er het craniosacrale systeem, met schedelbotten, wervelkolom, ruggenmergsvlies en hersenvochtcirculatie. In het onderzoek door de osteopaat komen altijd deze driesystemen aan de orde.</p>
	<p>Het onderzoek is gericht op beweeglijkheid. Door allerlei verschillende oorzaken kan die verstoord zijn geraakt. Tijdens de behandeling herstelt de osteopaat die oorspronkelijke beweeglijkheid met zachte, doelgerichte handgrepen. Daardoor kan het natuurlijk genezingsproces op gang komen.</p>
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
