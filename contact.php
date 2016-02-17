<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Contact Anne-Miek Osteopathie Amsterdam";
	$description = "contact informatie Osteopaat Anne-Miek de Nijs in Amsterdam. Zeer bekend om haar osteopathie bij kinderen";
	$keywords = "contact informatie";
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<h2>Contact</h2>
	
	<p>e-mail: <a href="mailto:osteopathie@anne-miek.com">osteopathie@anne-miek.com</a></p>
	<p>telefoon: +31 6 2550 5914</p>
	
	<h2>Locaties:</h2>
<div class="locations">
    <div class="vcard">
		<p>Op <span class="bold italic">dinsdag</span> en <span class="bold italic">woensdag</span> :</p>
		<span class="fn">De Gouden Reaal</span><br>
		<div class="adr">
			<span class="street-address">Brouwersgracht 214-hs</span><br>
			<span class="postal-code">1013 HD</span> <span class="locality">Amsterdam</span><br>
		</div>
	    <a href="/routebrouwersgracht.php">Routebeschrijving</a></p>
	    <div class="gmap-container">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.373564193076!2d4.886618500000002!3d52.381777999999905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609cef69cd7a1%3A0x3ba30057623785d5!2sBrouwersgracht+214%2C+1013+Amsterdam%2C+The+Netherlands!5e0!3m2!1sen!2s!4v1406574318868" width="400" height="300" frameborder="0" style="border:0"></iframe>
	    </div>
	</div>
    <div class="vcard">
		<p>Op <span class="bold italic">vrijdags</span> werk ik in:</p>
		<span class="fn">Integrale Huisartsenpraktijk West</span><br>
		<div class="adr">
			<span class="street-address">Witte de Withstraat 11</span><br>
			<span class="postal-code">1057 XE</span> <span class="locality">Amsterdam</span><br>
		</div>
	    <a href="/routewittedewithstraat.php">Routebeschrijving</a></p>
	    <div class="gmap-container">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.2905341570804!2d4.859527899999996!3d52.36515169999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e20c670f602f%3A0x122ca77aa2d0b559!2sWitte+de+Withstraat+11%2C+1057+XV+Amsterdam%2C+The+Netherlands!5e0!3m2!1sen!2s!4v1406574456783" width="400" height="300" frameborder="0" style="border:0"></iframe>
	    </div>
    </div>
</div>
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