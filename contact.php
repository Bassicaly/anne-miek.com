<?php
$INC_DIR = $_SERVER["DOCUMENT_ROOT"] . "/inc/";
$title = "Contact Anne-Miek Osteopathie Amsterdam";
$description = "contact informatie Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
$keywords = "contact informatie";
?>

<?php require($INC_DIR . "header.php"); ?>

<?php require($INC_DIR . "nav.php"); ?>

<section id="content">
	<h2>Contact</h2>

	<p>e-mail: <a href="mailto:osteopathie@anne-miek.com">osteopathie@anne-miek.com</a></p>
	<p>telefoon: +31 6 2550 5914</p>

	<h2>Locatie:</h2>
	<div class="locations">
		<div class="vcard">
			<p>Vanaf 1 augustus 2025 werk ik op een nieuwe locatie. De vorige locaties zijn niet meer van toepassing.</p>
			<p>Op <span class="bold italic">dinsdag, woensdag en vrijdag</span> werk ik in:</p>
			<span class="fn">Praktijk tussen de Bogen</span><br>
			<div class="adr">
				<span class="street-address">Tussen de Bogen 34</span><br>
				<span class="postal-code">1013 JB</span> <span class="locality">Amsterdam</span><br>
			</div>
			<div class="gmap-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.2327354781105!2d4.884336877574396!3d52.384331146264174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609cdc804c13b%3A0x2808e524686c5649!2sTussen%20de%20Bogen%2034%2C%201013%20JB%20Amsterdam!5e0!3m2!1sen!2snl!4v1753638531845!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<ul>
				<li>Tram 3: Uitstappen bij halte Haarlemmerplein</li>
				<li>Bus 18, 21, 22: Uitstappen bij halte Buiten Oranjestraat of Haarlemmerplein</li>
				<li>Vanaf beide haltes: Loop richting de spoorbogen (de bogen onder het spoorviaduct) en volg de straat Tussen de Bogen tot nummer 34.</li>
				<li>Vanaf Centraal Station:
					<ul>
						<li>Neem bus 18, 21 of 22 richting westen en stap uit bij Buiten Oranjestraat of Haarlemmerplein.</li>
						<li>Of loop in ongeveer 15 minuten via de Haarlemmerstraat en Haarlemmerplein naar Tussen de Bogen 34.</li>
					</ul>
				</li>
			</ul>
			<p>Parkeren: Tussen de Bogen heeft ook een eigen parkeergarage. Een plek reserveren is mogelijk via <a href="https://myway.app/"> de MyWay app</a>. De kosten zijn € 4,25 per uur op het moment van schrijven.</p>
			<p>Verder is er een parkeergarage aan het Haarlemmerplein: Willemspoort (Haarlemmer Houttuin 549, 1013 GM). Kosten: € 0,50 per 7 minuten en een maximaal dagtarief van € 47,50.</p>
			<p>Voor andere parkeermogelijkheden in de buurt, zie <a href="https://www.amsterdam.nl/parkeren/parkeertarieven/">deze link</a>.</p>
		</div>
	</div>
</section>

<?php require($INC_DIR . "footer.php"); ?>