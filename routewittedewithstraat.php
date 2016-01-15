<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Contact Anne-Miek Osteopathie Amsterdam";
	$description = "routebeschrijving naar de praktijk op de Witte de Withstraat en parkeer gelegenheid in de omgeving";
	$keywords = "routebeschrijving Witte de Withstraat";
?>


<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Witte de Withstraat</h2>
    <ul>
        <li>Tram 7: halte Postjesweg</li>
        <li>Tram 17:   halte Witte de Withstraat</li>
        <li>Bus 18: halte Jan Evertsenstraat</li>
    </ul>
    <p>Parkeren: € 3,- (09:00-24:00)
    Er is weinig parkeermogelijkheid voor de deur maar wel op de: 
    <ul>
        <li>Postjesweg</li>
        <li>Admiralengracht</li>
        <li>Van Brakelstraat</li>
        <li>Baarsjesweg</li>
    </ul>
    </p>

    
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