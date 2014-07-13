<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vergoedingen";
	$description = "Prijs van een consult en wat de verzekeraar vergoed";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Kosten / Vergoeding door verzekeraar</h2>
	<p>1e consult van 1 uur: € 80,- </p>
	<p>Vervolgconsulten van 45 minuten:  € 80-</p>
	<p>Consulten voor baby’s en kinderen tot 16 jaar zijn 30 minuten:  € 60,-</p>
	<p>Betalingen per pin of contant. Bij ieder consult krijgt u een nota mee die u bij uw zorgverzekeraar kunt declareren.</p>
	<p>Annuleren: Indien U bij verhindering tenminste 24 uur van te voren afzegt, wordt de gereserveerde tijd niet in rekening gebracht.</p>
	<h2>Vergoeding door verzekeraar:</h2>
	<p>Alle zorgverzekeraars vergoeden een osteopathisch consult geheel of gedeeltelijk uit het aanvullende pakket. Neem contact op met uw verzekeraar om te weten of dat ook geldt voor u. De meeste zorgverzekeraars vragen geen verwijzing voor osteopatische behandeling. <a href="http://www.osteopathie.nl/cms/upload/files/overzicht vergoedingen 2014-2 site.pdf" target="_blank">Hier (pdf)</a> vindt u een lijst van zorgverzekeraars en hun vergoedingen voor osteopathie voor 2014.</p>
	<p>Ik ben aangesloten bij het <a href="http://www.osteopathie-nro.nl" target="_blank">Nederlands Register voor Osteopathie (NRO)</a> en de <a href="http://www.osteopathie.nl" target="_blank">Nederlandse vereniging voor Osteopathie (NVO)</a></p>
	<h2>Verhoging BTW</h2>
	<p>De regering heeft in het zogenaamde Kunduz- of lenteakkoord van 2012 besloten dat osteopaten 21% omzetbelasting moeten afdragen per 1-1-2013. Dit heeft voor onze beroepsgroep enorme gevolgen aangezien wij als zorgverleners tot op heden niet BTW-plichtig waren.</p>
	<p>De beroepsvereniging van osteopaten, de NVO, stelt alles in het werk om deze maatregel teniet te doen. Echter tot op heden zonder resultaat. Wanneer u onze acties wilt steunen, kan dat via ondertekening van een petitie op: <a href="http://osteopathiebtwvrij.petities.nl" target="_blank">http://osteopathiebtwvrij.petities.nl/</a></p>
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

