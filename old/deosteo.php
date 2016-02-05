<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>
<div id="wrapper">
<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<br>
	<h2>De osteopaat</h2>
	<br>
Nederland telt ruim 600 geregistreerde osteopaten. Zij hebben de minimaal vijfjarige beroepsopleiding osteopathie gevolgd bij een opleiding die door het Nederlands Register voor Osteopathie (NRO) is erkend. Alle osteopaten die zijn geregistreerd bij het Nederlands Register voor Osteopathie werken volgens het beroepscompetentieprofiel osteopathie 2009. Zij mogen zich D.O.-MRO® noemen. De Nederlandse Vereniging voor Osteopathie behartigt de belangen van alle osteopaten.
•	Naar de Osteopaat
•	Osteopathie: een manuele geneeswijze
•	De Nederlandse Vereniging voor Osteopathie
•	Geschiedenis van de osteopathie
•	< terug
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