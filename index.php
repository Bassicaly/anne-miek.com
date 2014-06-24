<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Anne-Miek Osteopathie Amsterdam";
	$description = "Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
?>

<?php require($INC_DIR. "header.php"); ?>
<div id="wrapper">
<?php require($INC_DIR. "logonav.php"); ?>

	<section id="main_section">
		<?php require($INC_DIR. "old.php"); ?>
	</section>

<?php require($INC_DIR. "footer.php"); ?>