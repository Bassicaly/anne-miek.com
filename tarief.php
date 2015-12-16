<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vergoedingen";
	$description = "Prijs van een consult en wat de verzekeraar vergoed";
	$keywords = "vergoeding voor behandeling";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Kosten / Vergoeding door verzekeraar</h2>
	<p>1e consult van 1 uur: € 90,- </p>
	<p>Vervolgconsulten van 45 minuten:  € 80-</p>
	<p>Consulten voor baby’s en kinderen tot 16 jaar zijn 30 minuten:  € 60,-</p>
	<p>Betalingen per pin of contant. Bij ieder consult krijgt u een nota mee die u bij uw zorgverzekeraar kunt declareren.</p>
	<p>Annuleren: Indien U bij verhindering tenminste 24 uur van te voren afzegt, wordt de gereserveerde tijd niet in rekening gebracht.</p>
	<h2>Vergoeding door verzekeraar:</h2>
	<p>Alle zorgverzekeraars vergoeden een osteopathisch consult geheel of gedeeltelijk uit het aanvullende pakket. Neem contact op met uw verzekeraar om te weten of dat ook geldt voor u. De meeste zorgverzekeraars vragen geen verwijzing voor osteopatische behandeling. Hier vindt u een <a href="http://www.osteopathie.nl/cms/upload/files/overzicht%20vergoedingen%202016.pdf" target="_blank">lijst van zorgverzekeraars en hun vergoedingen (pdf)</a> voor osteopathie voor 2016.</p>
	<p>Ik ben aangesloten bij het <a href="http://www.osteopathie-nro.nl" target="_blank">Nederlands Register voor Osteopathie (NRO)</a> en de <a href="http://www.osteopathie.nl" target="_blank">Nederlandse vereniging voor Osteopathie (NVO)</a></p>
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

