	<nav id="main-nav">
		<a href="#top_menu" title="Show navigation">Show navigation</a>
		<a href="#" title="Hide navigation">Hide navigation</a>
		<li><a href="/index.php">Home</a></li>
		<li class="dropdown"><a href="/osteopaat.php">Osteopathie</a>
			<ul class="dropdown-content">
				<li><a href="/hoe.php">Hoe werkt het</a></li>
				<li><a href="/onderzoekwatdoenwe.php">Onderzoek</a></li>
				<li><a href="/behandelingwatgebeurter.php">Behandeling</a></li>
				<li><a href="/wanneernaardeosteo.php">Welke Klachten</a></li>
				<li><a href="/geschiedenis.php">Geschiedenis</a></li>
			</ul>
		</li>
		<li class="dropdown"><a href="#">Voor wie?</a>
			<ul class="dropdown-content">
				<li><a href="/babies.php">Baby's</a></li>
				<li><a href="/kinderen.php">Kinderen</a></li>
				<li><a href="/zwangerschap.php">Zwangeren</a></li>
				<li><a href="/volwassenen.php">Volwassenen</a></li>
			</ul>
		</li>
		<li class="dropdown"><a href="/anne-miek.php">Over mij</a></li>
		<li><a href="/tarief.php">Tarief</a></li>
		<li><a href="/contact.php">Contact</a></li>
		<li><a href="/privacy.php">Uw privacy</a></li>
		<li><a href="/anne-miekzingen.php">Anne-Miek zingen</a></li>
	</nav>

	<script>
		$( function()
		{
			$( '#top_menu li:has(ul)' ).doubleTapToGo();
		});
	</script>