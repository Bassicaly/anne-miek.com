<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "De osteopaat";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam.";
	$keywords = "nvo nro beroepsopleiding osteopaten geregistreerd beroepscompetentieprofiel";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>De osteopaat</h2>
	<p>Nederland telt ruim 600 geregistreerde osteopaten. Zij hebben de minimaal vijfjarige beroepsopleiding osteopathie gevolgd bij een opleiding die door het <a href="http://osteopathie-nro.nl/" target="_blank">Nederlands Register voor Osteopathie (NRO)</a> is erkend. Alle osteopaten die zijn geregistreerd bij het Nederlands Register voor Osteopathie werken volgens het beroepscompetentieprofiel osteopathie 2009. Zij mogen zich D.O.-MRO&reg; noemen. De <a href="http://www.osteopathie.nl/" target="_blank">Nederlandse Vereniging voor Osteopathie (NVO)</a> behartigt de belangen van alle osteopaten.</p>
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