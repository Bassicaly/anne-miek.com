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
		<form action="/files/formmailer.php" method="post" name="REG"><!--- e-mail address of the person handling this form --->
			<input type="hidden" name="EMAIL" />
			<input type="hidden" name="SUBJECT" />
			<h2>Vragenformulier</h2>
			<p>Onderstaand treft u een groot aantal vragen aan die voor mij een waardevolle hulp is bij uw behandeling en bijdragen tot een optimaal behandelresultaat. Elke vraag is even belangrijk en geeft mij inzicht in uw klachten.</p>
			<p>Indien u al een afspraak heeft wilt u dan hieronder aangeven wanneer en hoe laat:</p>
			<fieldset>
				<legend>Uw afspraak</legend>
				<label for="afspraak">U heeft een afspraak op :</label><input type="date" id="afspraak" name="afspraakDatum" size="30" /><br />
				<label for="om">om :</label><input type="time" id="om" name="afspraakTijd" size="30" /> uur<br />
			</fieldset>
			<br /> <br />
			<fieldset>
				<legend>Persoonlijke informatie</legend>
				<input type="date" name="Datum" size="30" placeholder="Datum" /><br />
				<input type="text" name="Naam" size="30" placeholder="Naam" /><br />
				<input type="text" name="Adres" size="30" placeholder="Adres" /><br />
				<input type="tel" name="Tel_prive" size="30" placeholder="Telefoon prive" /><br />
				<input type="tel" name="Tel_werk" size="30" placeholder="Telefoon werk" /><br />
				<input type="tel" name="Tel_mobiel" size="30" placeholder="Mobiel" /><br />
				<input type="email" name="E-mail" size="30" placeholder="E-mail" /><br />
				<input type="date" name="Geboortedatum" size="30" placeholder="Geboortedatum" /><br />
				<input type="radio" name="Geslacht" value="Man" /> Man <input type="radio" name="Geslacht" value="Vrouw" /> Vrouw <input type="radio" name="Geslacht" value="Anders" /> Anders<br />
				<input type="text" name="Huisarts" size="30" placeholder="Huisarts"/> <br />
				<input type="text" name="Verwijzing" size="30" placeholder="Hoe bent u bij Osteopathie Amsterdam gekomen?"/><br />
			</fieldset>
			<br />
			<fieldset>
				<legend>Uw klachten</legend>
			<label for="1">1 Voor welke klacht(en) komt u hier? (in volgorde van belangrijkheid)</label><br />
			<textarea id="1" name="Voor welke klacht(en) komt u hier? (in volgorde van belangrijkheid)"></textarea><br />
			<label for="2">2 Wanneer zijn uw klachten begonnen? Maand <input id="2" type="month" name="Klachten begonnen" /> jaar<br />
			<label for="3">3 Wat is naar uw mening de oorzaak van uw klachten?</label><br />
			<textarea id="3" name="Wat is naar uw mening de oorzaak van uw klachten"></textarea><br />
			<label for="4">4 Zijn er houdingen, bewegingen en/of andere zaken die de klachten verergeren?</label><br />
			<textarea id="4" name="Zijn er houdingen, bewegingen en/of andere zaken die de klachten verergeren?"></textarea><br />
			<p>5 Is er iets wat de klachten verminderd?<br /><textarea name="Is er iets wat de klachten verminderd?"></textarea></p>
			<p>6 Gebruikt u medicijnen? Welke? (ook de pil)<br /><textarea name="Gebruikt u medicijnen? Welke? (ook de pil)"></textarea></p>
			<p>7 Gebruikt u voedingssupplementen en/of volgt u een dieet?<br /><textarea name="Gebruikt u voedingssupplementen en/of volgt u een dieet?"></textarea></p>
			<p>8 Bent u onder behandeling van een specialist (of geweest), en waarvoor?<br /> (Ook als dit niet in verband staat met deze klachten)<br /><textarea name="Bent u onder behandeling van een specialist (of geweest), en waarvoor?"></textarea></p>
			<p>9 Bent u onder behandeling van andere therapeuten, en waarvoor?<br /><textarea name="Bent u onder behandeling van andere therapeuten, en waarvoor?"></textarea></p>
			<p>10 Bent u wel eens ergens aan geopereerd? Zo ja, op welke leeftijd?<br /><textarea name="Bent u wel eens ergens aan geopereerd? Zo ja, op welke leeftijd?"></textarea></p>
			<p>11 Heeft u wel eens botten gebroken? Zo ja, op welke leeftijd?<br /><textarea name="Heeft u wel eens botten gebroken? Zo ja, op welke leeftijd?"></textarea></p>
			<p>12 Heeft u wel eens medische onderzoeken ondergaan (zoals bloed, darmen, R&ouml;ntgen enz.) <br /> en wat was de uitslag daarvan?<br /><textarea name="Heeft u wel eens medische onderzoeken ondergaan (zoals bloed, darmen, Röntgen enz.) en wat was de uitslag daarvan?"></textarea></p>
			<p>13 Werkt u, en zo ja, wat voor werk en hoe hoog is de lichamelijke belasting en psychische belasting?<br /><textarea name="Werkt u, en zo ja, wat voor werk en hoe hoog is de lichamelijke belasting en psychische belasting?"></textarea></p>
			<p>14 Sport u? Welke, hoe vaak in de week en hoe lang?<br /><textarea name="Sport u? Welke, hoe vaak in de week en hoe lang?"></textarea></p>
			<p>15 Heeft u nog andere hobby's?<br /><textarea name="Heeft u nog andere hobby's?"></textarea></p>
			<p>16 Zijn er erfelijke ziektes in de familie?<br /><textarea name="Zijn er erfelijke ziektes in de familie?"></textarea></p>
			</fieldset>
			<p>Beantwoord de hieronder gestelde vragen door aan te vinken wat van toepassing is.<br /></p>
			<fieldset>
				<legend>Algemeen welbevinden</legend>
				<input type="checkbox" name="Slaappatroon veranderd" />Is uw slaappatroon de laatste tijd veranderd<br />
				<input type="checkbox" name="Eetlust veranderd" />Is uw eetlust veranderd<br />
				<input type="checkbox" name="Gewicht verloren" />Hebt u de laatste tijd gewicht verloren<br />
				<input type="checkbox" name="Laatste tijd stress" />Bent u de laatste tijd meer prikkel-gevoelig en/of stressgevoelig<br />
				<input type="checkbox" name="Pijnlijke klieren" />Heeft u last van pijnlijke en/of opgezette (lymfe)klieren<br />
				<input type="checkbox" name="De laatste tijd sneller vermoeid" />Bent u de laatste tijd sneller vermoeid<br />
				<input type="checkbox" name="De laatste tijd infectie/ontsteking gehad" />Heeft u de laatste tijd net een infectie/ontsteking gehad<br />
			</fieldset>
			<fieldset>
				<legend>Hart/bloedvaten</legend>
				<input type="checkbox" name="Wel eens hartkloppingen" />Heeft u wel eens hartkloppingen<br />
				<input type="checkbox" name="Pijn op de borst" />Heeft u wel eens pijn op de borst<br />
				<input type="checkbox" name="Kortademig" />Bent u bij/na inspanning kortademig<br />
				<input type="checkbox" name="Zwelling been" />Herkent u wel eens zwelling aan uw been/benen<br />
				<input type="checkbox" name="Spataderen" />Heeft u last van spataderen<br />
				<input type="checkbox" name="Koude ledematen" />Heeft u last van koude handen/voeten<br />
			</fieldset>
			<fieldset>
				<legend>Longen</legend><br />
					<tr><td>Heeft u het wel eens benauwd</td>
						<td><input type="checkbox" name="Benauwd" /></td>
					</tr>
					<tr><td>Bent u bekend met allergie/allergie&euml;n</td>
						<td><input type="checkbox" name="Allergie" /></td>
					</tr>
					<tr><td>Heeft u wel eens last van hyperventilatie</td>
						<td><input type="checkbox" name="Hyperventilatie" /></td>
					</tr>
					<tr><td>Hoest u vaak slijm op</td>
						<td><input type="checkbox" name="Hoest slijm" /></td>
					</tr>
					<tr><td>Heeft u wel eens longontsteking gehad</td>
						<td><input type="checkbox" name="Longontsteking" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
			</fieldset>
			<fieldset>
				<legend>Urinewegen</legend><br />
					<tr><td>Heeft u pijn bij het plassen</td>
						<td><input type="checkbox" name="Pijn bij plassen" /></td>
					</tr>
					<tr><td>Heeft u wel eens een blaasontsteking gehad</td>
						<td><input type="checkbox" name="Blaasontsteking" /></td>
					</tr>
					<tr><td>Heeft u wel eens een drang te moeten plassen maar dat dit niet lukt</td>
						<td><input type="checkbox" name="Wel drang geen plas" /></td>
					</tr>
					<tr><td>Verliest u wel eens ongecontroleerd urine</td>
						<td><input type="checkbox" name="Verliest urine" /></td>
					</tr>
					<tr><td>voor de man: heeft u last van nadruppelen?</td>
						<td><input type="checkbox" name="nadruppelen" /></td>
					</tr>
					<tr><td>Moet u in de nacht vaker dan &eacute;&eacute;n keer naar het toilet</td>
						<td><input type="checkbox" name="Moet in de nacht vaker dan één keer naar het toilet" /></td>
					</tr>
					<tr><td>Heeft u wel eens bloed bij de urine</td>
						<td><input type="checkbox" name="Heeft wel eens bloed bij de urine" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
			</fieldset>
			<strong>Spijsvertering</strong><br />
					<tr><td>Heeft u een voedsel allergie/allergie&euml;n</td>
						<td><input type="checkbox" name="Heeft een voedsel allergie/allergieën" /></td>
					</tr>
					<tr><td>Heeft u wel eens spontaan diarree (zonder ziek te zijn)</td>
						<td><input type="checkbox" name="Heeft spontaan diarree" /></td>
					</tr>
					<tr><td>Heeft u wel eens bloed bij de ontlasting</td>
						<td><input type="checkbox" name="Heeft bloed bij ontlasting" /></td>
					</tr>
					<tr><td>Heeft u een moeilijke en/of pijnlijke stoelgang</td>
						<td><input type="checkbox" name="Heeft pijnlijke stoelgang" /></td>
					</tr>
					<tr><td>Bent u bekend met maagpijn/ontstekingen in de maagstreek</td>
						<td><input type="checkbox" name="Maagklachten" /></td>
					</tr>
					<tr><td>Heeft u last van oprispingen/zuurbranden</td>
						<td><input type="checkbox" name="Oprispingen" /></td>
					</tr>
					<tr><td>Heeft u vaak last van een opgeblazen gevoel</td>
						<td><input type="checkbox" name="Opgeblazen gevoel" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Eten en drinken</strong><br />
					<tr><td colspan="3">Bemerkt u verteringsproblemen bij het eten van een van de volgende produkten:<br />
					<tr><td>Aardappelen en/of tomaten</td>
						<td><input type="checkbox" name="Aardappelen" /></td>
					</tr>
					<tr><td>Uien en/of knoflook</td>
						<td><input type="checkbox" name="Uien" /></td>
					</tr>
					<tr><td>Vlees</td>
						<td><input type="checkbox" name="Vlees" /></td>
					</tr>
					<tr><td>Vis</td>
						<td><input type="checkbox" name="Vis" /></td>
					</tr>
					<tr><td>Tarweprodukten</td>
						<td><input type="checkbox" name="Tarweprodukten" /></td>
					</tr>
					<tr><td>Zuivelprodukten</td>
						<td><input type="checkbox" name="Zuivelprodukten" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Zenuwstelsel</strong><br />
					<tr><td>Heeft u wel eens krachtverlies in armen of benen</td>
						<td><input type="checkbox" name="Krachtsverlies in armen of benen" /></td>
					</tr>
					<tr><td>Heeft u wel eens een gevoelsvermindering in armen of benen</td>
						<td><input type="checkbox" name="Gevoelsvermindering in armen of bene" /></td>
					</tr>
					<tr><td>Bent u vaak duizelig</td>
						<td><input type="checkbox" name="Vaak duizelig" /></td>
					</tr>
					<tr><td>Heeft u wel eens "vlekken" voor de ogen</td>
						<td><input type="checkbox" name="Vlekken voor ogen" /></td>
					</tr>
					<tr><td>Heeft u wel eens last van oorsuizingen</td>
						<td><input type="checkbox" name="Oorsuizingen" /></td>
					</tr>
					<tr><td>Heeft u migraine</td>
						<td><input type="checkbox" name="Heeft migraine" /></td>
					</tr>
					<tr><td>Bent u epileptisch</td>
						<td><input type="checkbox" name="Epileptisch" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Zintuigen</strong><br />
					<tr><td>Heeft u wel eens het gevoel op watten te lopen</td>
						<td><input type="checkbox" name="Watten lopen" /></td>
					</tr>
					<tr><td>Heeft u vaker dan 1 keer per maand hoofdpijn</td>
						<td><input type="checkbox" name="Heeft vaak hoofdpijn" /></td>
					</tr>
					<tr><td>Heeft u problemen met uw zicht (zien/kijken)</td>
						<td><input type="checkbox" name="Heeft zicht problemen" /></td>
					</tr>
					<tr><td>Heeft u problemen met uw gehoor</td>
						<td><input type="checkbox" name="Heeft gehoorsproblemen" /></td>
					</tr>
					<tr><td>Heeft u problemen met ruiken</td>
						<td><input type="checkbox" name="Kan goed ruiken" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Geopathische belasting</strong><br />
					<tr><td>Heeft u een waterbed</td>
						<td><input type="checkbox" name="Heeft waterbed" /></td>
					</tr>
					<tr><td>Zit u vaak achter de computer</td>
						<td><input type="checkbox" name="Zit vaak achter computer" /></td>
					</tr>
					<tr><td>Belt u veel mobiel</td>
						<td><input type="checkbox" name="Belt veel mobiel" /></td>
					</tr>
					<tr><td>Woont u bij/onder hoogspanningsmasten</td>
						<td><input type="checkbox" name="Woont bij hoogspanningsmasten" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Psyche/stress</strong><br />
					<tr><td>Heeft u moeite zich te concentreren</td>
						<td><input type="checkbox" name="Moeite met concentreren" /></td>
					</tr>
					<tr><td>Voelt u zich niet uitgerust als u wakker wordt</td>
						<td><input type="checkbox" name="Wordt niet uitgerust wakker" /></td>
					</tr>
					<tr><td>Heeft u problemen om in slaap te komen</td>
						<td><input type="checkbox" name="Heeft problemen met in slaap komen" /></td>
					</tr>
					<tr><td>Heeft u vaak last van nare dromen</td>
						<td><input type="checkbox" name="Heeft vaak last van nare dromen" /></td>
					</tr>
					<tr><td>Heeft u de neiging uzelf onder druk te zetten</td>
						<td><input type="checkbox" name="Heeft neiging zichzelf onder druk te zetten" /></td>
					</tr>
					<tr><td>Bent u vaak somber/gedeprimeerd</td>
						<td><input type="checkbox" name="Vaak somber/gedeprimeerd" /></td>
					</tr>
					<tr><td>Kunt u zich moeilijk ontspannen</td>
						<td><input type="checkbox" name="Moeilijk ontspannen" /></td>
					</tr>
					<tr><td>Heeft u ooit gemediteerd</td>
						<td><input type="checkbox" name="Ooit gemediteerd" /></td>
					</tr>
					<tr><td>Heeft u het idee dat u meer voor uzelf moet opkomen</td>
						<td><input type="checkbox" name="Moet meer voor uzelf opkomen" /></td>
					</tr>
					<tr><td>Heeft u de neiging om snel uit uw slof te schieten</td>
						<td><input type="checkbox" name="Heeft neiging snel uit slof te schieten" /></td>
					</tr>
					<tr><td>Raakt u snel overstuur</td>
						<td><input type="checkbox" name="Raakt snel overstuur" /></td>
					</tr>
					<tr><td>Heeft u de neiging om veel vooruit te plannen</td>
						<td><input type="checkbox" name="Plant veel vooruit" /></td>
					</tr>
					<tr><td>Zijn uw stemmingen vaak wisselvallig</td>
						<td><input type="checkbox" name="Wisselvallige stemmingen" /></td>
					</tr>
					<tr><td>Heeft u veel behoefte aan controle</td>
						<td><input type="checkbox" name="Heeft behoefte aan controle" /></td>
					</tr>
					<tr><td>Voelt u zich snel paniekerig en angstig</td>
						<td><input type="checkbox" name="Voelt snel paniekerig en angstig" /></td>
					</tr>
					<tr><td>Heeft u het idee uw werk niet goed aan te kunnen</td>
						<td><input type="checkbox" name="Heeft idee werk niet aan te kunnen" /></td>
					</tr>
					<tr><td>Heeft u soms het idee er niet echt bij te zijn en het leven als een film te beleven</td>
						<td><input type="checkbox" name="Is er niet helemaal bij" /></td>
					</tr>
					<tr><td>Bent u ontevreden met uw sociale contacten</td>
						<td><input type="checkbox" name="Ontevreden over contacten" /></td>
					</tr>
					<tr><td>Heeft u de neiging om conflicten te vermijden</td>
						<td><input type="checkbox" name="Neiging conflicten te vermijden" /></td>
					</tr>
					<tr><td>Heeft u het idee niet genoeg initiatieven te nemen</td>
						<td><input type="checkbox" name="Niet genoeg initiatief" /></td>
					</tr>
					<tr><td>Bent u zich vooral bewust van uw negatieve eigenschappen</td>
						<td><input type="checkbox" name="Vooral bewust negatieve eigenschappen" /></td>
					</tr>
					<tr><td>Kunt u zien dat bepaalde gedragspatronen zich herhalen in uw leven</td>
						<td><input type="checkbox" name="Gedragspatronen herhalen" /></td>
					</tr>
					<tr><td>Heeft u het idee onvoldoende bevestiging in uw leven</td>
						<td><input type="checkbox" name="Onvoldoende bevestiging" /></td>
					</tr>
					<tr><td>Vindt u het moeilijk om zich een voorstelling te maken hoe uw leven er over 5 jaar uit ziet</td>
						<td><input type="checkbox" name="Vindt het moeilijk om zich een voorstelling te maken hoe leven er over 5 jaar uit ziet" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Divers</strong><br />
					<tr><td>Heeft u problemen met uw gebit/tanden</td>
						<td><input type="checkbox" name="Problemen met uw gebit/tanden"  /></td>
					</tr>
					<tr><td>Heeft u amalgaam vullingen/wortelkanaalbehandeling gekregen</td>
						<td><input type="checkbox" name="Amalgaan vullingen/wortelkanaalbehandeling gekregen" /></td>
					</tr>
					<tr><td>Heeft u wel eens antibiotica of prednison gebruikt</td>
						<td><input type="checkbox" name="Wel eens antibiotica of prednison gebruikt" /></td>
					</tr>
					<tr><td>Bent u verslaafd aan bv. alcohol, koffie, snoep of drugs</td>
						<td><input type="checkbox" name="Verslaafd aan bv. alchohol, koffie, snoep of drugs" /></td>
					</tr>
					<tr><td>Heeft u piercings</td>
						<td><input type="checkbox" name="Heeft piercings" /></td>
					</tr>
					<tr><td>Rookt u</td>
						<td><input type="checkbox" name="Rookt"  /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;<br />
					<tr><td colspan="3"><strong>Alleen in te vullen door vrouwen</strong><br />
					<tr><td>Bent u wel eens zwanger geweest</td>
						<td><input type="checkbox" name="Wel eens zwanger geweest" /></td>
					</tr>
					<tr><td>Heeft u al eens een keizersnede ondergaan</td>
						<td><input type="checkbox" name="Al eens een keizersnede ondergaan" /></td>
					</tr>
					<tr><td>Gebruikt u een spiraaltje</td>
						<td><input type="checkbox" name="Gebruikt een spiraaltje" /></td>
					</tr>
					<tr><td>Heeft u een pijnlijke menstruatie</td>
						<td><input type="checkbox" name="Heeft een pijnlijke menstruatie" /></td>
					</tr>
					<tr><td>Heeft u wel eens bekkeninstabiliteit gehad</td>
						<td><input type="checkbox" name="Wel eens bekkeninstabiliteit gehad" /></td>
					</tr>
					<tr><td colspan="3">Was uw eerste menstruatie voor uw 12e 
						<input type="radio" name="menstruatie" value="voor_12" /> of na uw 15e jaar 
						<input type="radio" name="menstruatie" value="na_15" /></td>
					</tr>
				</tbody>
			</table>
			<p><br /> Hartelijk dank voor het invullen van deze vragenlijst. Met deze informatie zal <br /> vanzelfsprekend zorgvuldig worden omgegaan.</p>
			<input type="submit" name="submit" value="Verzenden" />
		</form><!-- EINDE INHOUD-->
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

