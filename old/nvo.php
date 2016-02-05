<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<h2>De Nederlandse Vereniging voor Osteopathie</h2>
	<p>De Nederlandse Vereniging voor Osteopathie behartigt sinds 1986 de belangen van de osteopathie in Nederland. De organisatie maakt zich sterk voor wetenschappelijke erkenning van de behandelmethode. Ook onderhoudt de vereniging contacten met andere organisaties van beroepsbeoefenaren, patiënten en opleidingen, behartigt de belangen van aspirant-leden en begeleidt osteopaten bij het starten van een praktijk voor osteopathie.</p>
	<p>De NVO is een democratisch instituut met statuten en een huishoudelijk reglement. Deze zijn ook op te vragen via ons secretariaat.</p>
	<p>De meeste NVO-leden zijn geregistreerd bij het NRO, het Nederlands Register voor Osteopathie. Patiënten kunnen bij het NRO terecht voor informatie over osteopathie in het algemeen, een osteopaat bij hen in de buurt, maar ook met klachten. <a href="http://www.osteopathie-nro.nl" target="_blank">www.osteopathie-nro.nl</a>. De NVO en NRO hebben een gezamenlijke organisatiestructuur. De NRO registreert de osteopaten die opgeleid zijn volgens het beroepscompetentieprofiel. NVO en NRO hebben dit BCP gezamenlijk opgesteld. Een aantal NVO-leden zijn bij de NOF aangesloten.</p>
	<p>Osteopaten die geregistreerd zijn bij het NRO voeren de beschermde titel DO-MRO®. Het College van Osteopaten, CvO, beschermt de kwaliteit van de osteopathische zorg in Nederland. Door deze organisatiestructuur is de kwaliteit van de osteopathische zorg gewaarborgd.</p>
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