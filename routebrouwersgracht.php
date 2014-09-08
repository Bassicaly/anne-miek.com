<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Contact Anne-Miek Osteopathie Amsterdam";
	$description = "contact informatie Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
	$keywords = "contact informatie";
?>


<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Brouwersgracht</h2>
    <ul>
        <li>Tram 3: halte Haarlemmerplein</li>
        <li>Bus 18, 21 en 22: halte Buiten Oranjestraat of Haarlemmerplein</li>
    </ul>
    <p>Parkeren: € 4,- per uur (09:00-24:00) op de:
    <ul>
        <li>Brouwersgracht</li>
        <li>Willemsstraat</li>
        <li>Lindengracht (die heeft een dubbele rij parkeermogelijkheden)</li>
    </ul>
    Verder is er een parkeergarage aan het Haarlemmerplein: Willemspoort (Haarlemmer Houttuin 549, 1013 GM). Kosten: € 0,50 per 7 minuten en een maximaal dagtarief van € 47,50.</p>

    
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