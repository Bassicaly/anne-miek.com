<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<h2>Volwassenen</h2>
	<img class="right" src="/img/nvo4.jpg" alt="behandeling van een vrouw" />
	<p>Een behandeling door een osteopaat is vaak een grote opluchting. Een osteopaat kan klachten verhelpen die al jaren spelen en die soms zelfs onoplosbaar leken. Een osteopaat ziet het lichaam als één geheel. Hij/zij weet  welke lichaamsweefsels met elkaar in verbinding staan en op welke manier ze elkaar kunnen beïnvloeden. Daardoor kan een osteopaat de mogelijke oorzaak van een klacht vinden, waar andere behandelaars die niet vonden: soms in een ander deel van het lichaam dan waar de klacht optreedt.</p>
	<p>Vaak komt een osteopaat in beeld als een klacht hardnekkig blijkt. Als er bijvoorbeeld gezegd is: ‘met deze pijn moet u maar leren leven’. Dat kan over allerlei klachten gaan: rug- en nekklachten, whiplash, RSI, migraine, incontinentie, maag- en darmklachten.</p>
	<p>Osteopathie is een veilige behandelmethode, die gebaseerd is op principes uit embryologie, fysiologie, anatomie en neurologie. Ik behandel ook kinderen, baby’s en zwangere vrouwen.</p>
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

