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
	<!-- START INHOUD-->
Welcome <?php echo $_POST["voornaam"]; ?> <?php echo $_POST["achternaam"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<br>
And this is hopefully all the POST data:<br>
<?php
	$msg = "";
    while (list($var, $val) = each($_POST)) {
		$res = "<span class=\"variable\">$var</span> : <span class=\"value\">$val</span><br>";
		$msg .= $res;
        print $res;
    }
	
	send_att($msg);
?>
<!-- EINDE INHOUD-->
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
