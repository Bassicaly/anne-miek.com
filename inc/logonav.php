	<header id="top_header">
		<img src="/img/zonnebloem.png" />		
		<h1>Anne-Miek Osteopathie</h1>
		<a href="indexen.html"></a>
	</header>
	
	<div id="slideshow">
		<img src="/img/firstcar.gif" name="slide" />
	<!-- script for the slideshow -->
		<script>
			<!--
			//variable that will increment through the images
			var step=1
			function slideit(){
			//if browser does not support the image object, exit.
				if (!document.images)
					return
				document.images.slide.src=eval("image"+step+".src")
				if (step<14)
					step++
				else
					step=1
					//call function "slideit()" every 2.5 seconds
					setTimeout("slideit()",2500)
			}
			slideit()
			//-->
		</script>
	</div>
	
	<nav id="top_menu">
		<ul id="navmenu">
			<li><a href="/index.php">Home</a></li>
			<li><a href="/nvo.php">Osteopathie</a>
				<ul class="sub1">
					<li><a href="/nvo.php">Onderzoek</a></li>
					<li><a href="/nvo.php">Behandeling</a></li>
					<li><a href="/nvo.php">Waarvoor</a>
						<ul class="sub2">
							<li><a href="/nvo.php">Onderzoek</a></li>
							<li><a href="/nvo.php">Behandeling</a></li>
							<li><a href="/nvo.php">Waarvoor</a></li>
				</ul>
					</li>
				</ul>
			</li>
			<li><a href="/nvo.php">Tarieven</a></li>
			<li><a href="/nvo.php">Contact</a></li>
		</ul>
	</nav>