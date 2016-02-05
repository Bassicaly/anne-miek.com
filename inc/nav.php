	<nav id="top_menu">
		<a href="#top_menu" title="Show navigation">Show navigation</a>
		<a href="#" title="Hide navigation">Hide navigation</a>
		<ul id="navmenu">
			<li><a href="/index.php">Home</a></li>
			<li><a href="/osteopaat.php">Osteopathie</a>
				<ul>
					<li><a href="/hoe.php">Hoe werkt het</a></li>
					<li><a href="/onderzoekwatdoenwe.php">Onderzoek</a></li>
					<li><a href="/behandelingwatgebeurter.php">Behandeling</a></li>
					<li><a href="/wanneernaardeosteo.php">Welke Klachten</a></li>
					<li><a href="/geschiedenis.php">Geschiedenis</a></li>
				</ul>
			</li>
			<li><a href="#">Voor wie?</a>
				<ul>
					<li><a href="/babies.php">Baby's</a></li>
					<li><a href="/kinderen.php">Kinderen</a></li>
					<li><a href="/zwangerschap.php">Zwangeren</a></li>
					<li><a href="/volwassenen.php">Volwassenen</a></li>
				</ul>
			</li>
			<li><a href="/anne-miek.php">Over mij</a></li>
			<li><a href="#">Vragenlijst</a>
				<ul>
					<li><a href="/vragenlijst.php">Volwassenen</a></li>
					<li><a href="/vragenlijstbabies.php">Baby's</a></li>
				</ul>
			</li>
			<li><a href="/tarief.php">Tarief</a></li>
			<li><a href="/contact.php">Contact</a></li>
		</ul>
	</nav>

	<script>
		$( function()
		{
			$( '#top_menu li:has(ul)' ).doubleTapToGo();
		});
	</script>