<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vragenlijst volwassenen";
	$description = "Vragenlijst om een duidelijk beeld te krijgen van uw klachten. Dit ter voorbereiding op uw behandeling";
	$keywords = "vragenlijst anamnese osteopathie amsterdam geschikt voor iedereen geneeswijze zachte behandeltechnieken";
?>

<?php
    session_start();
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo count($_POST);
		}
	?>
		<!-- <form action="/files/formmailer.php" method="post" name="REG"><!--- e-mail address of the person handling this form --->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="hidden" name="EMAIL" value="bas@anne-miek.com" />
			<input type="hidden" name="SUBJECT" value="[testform] <?php echo $_GET["name"] ?>"/>
			<fieldset>
				<legend>Algemeen welbevinden</legend>
				<input type="text" id="name" placeholder="Type your name"><br />
				<input type="checkbox" id="alg_slaap" name="Slaappatroon veranderd" /><label for="alg_slaap"> Is uw slaappatroon de laatste tijd veranderd</label><br />
				<input type="checkbox" id="alg_eetlust" name="Eetlust veranderd" /><label for="alg_eetlust"> Is uw eetlust veranderd</label><br />
				<input type="checkbox" id="alg_stress" name="Laatste tijd stress" /><label for="alg_stress"> Bent u de laatste tijd meer prikkel-gevoelig en/of stressgevoelig</label><br />
				<input type="checkbox" id="alg_klieren" name="Pijnlijke klieren" /><label for="alg_klieren"> Heeft u last van pijnlijke en/of opgezette (lymfe)klieren</label><br />
				<input type="checkbox" id="alg_vermoeid" name="De laatste tijd sneller vermoeid" /><label for="alg_vermoeid"> Bent u de laatste tijd sneller vermoeid</label><br />
				<input type="checkbox" id="alg_infectie" name="De laatste tijd infectie/ontsteking gehad" /><label for="alg_infectie"> Heeft u de laatste tijd net een infectie/ontsteking gehad</label><br />
			</fieldset>
			<input type="submit" name="submit" value="Verzenden" />
		</form>
	</section>
	
	<aside id="news_left">
		<ul>
		</ul>
	</aside>

	<aside id="news_right">
		<ul>
		</ul>
	</aside>

<?php require($INC_DIR. "footer.php"); ?>
