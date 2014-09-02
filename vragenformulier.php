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
			<p>Onderstaand treft u een groot aantal vragen aan die voor ons een waardevolle hulp zijn bij uw behandeling en bijdragen tot een optimaal behandelresultaat. Elke vraag is even belangrijk en geeft ons inzicht in uw klachten.</p>
			<p>Indien u al een afspraak met ons heeft wilt u dan hieronder aangeven wanneer en hoe laat:</p>
			<table style="width: 500px; height: 22px;" border="0">
				<tbody>
					<tr><td>U heeft een afspraak op :</td><td><input type="text" name="afspraakDatum" size="30" /></td></tr>
					<tr><td>om :</td><td><input type="text" name="afspraakTijd" size="30" /> uur</td></tr>
				</tbody>
			</table>
			<br /> <br />
			<table width="700">
				<tbody>
					<tr><td>Datum</td><td><input type="text" name="Datum" size="30" /></td></tr>
					<tr><td>Naam</td><td><input type="text" name="Naam" size="30" /></td></tr>
					<tr><td valign="top">Adres</td><td><textarea name="Adres" rows="4" cols="40"></textarea> </td></tr>
					<tr><td>Telefoon priv&eacute;</td><td><input type="text" name="Tel_prive" size="30" /> </td></tr>
					<tr><td>werk</td><td><input type="text" name="Tel_werk" size="30" /> </td></tr>
					<tr><td>mobiel</td><td><input type="text" name="Tel_mobiel" size="30" /> </td></tr>
					<tr><td>E-mail adres</td><td><input type="text" name="E-mail" size="30" /> </td></tr>
					<tr><td>Geboortedatum</td><td><input type="text" name="Geboortedatum" size="30" /> </td></tr>
					<tr><td>Geslacht</td><td>Man <input type="radio" name="Geslacht" value="Man" /> Vrouw <input type="radio" name="Geslacht" value="Vrouw" /> </td></tr>
					<tr><td>Huisarts</td><td><input type="text" name="Huisarts" size="30" /> </td></tr>
					<tr><td>Hoe bent u bij Osteopathie Amsterdam gekomen?</td><td valign="top"><input type="text" name="Verwijzing" size="30" /></td></tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<p>1 Voor welke klacht(en) komt u hier? (in volgorde van belangrijkheid)</p>
			<p><textarea name="Voor welke klacht(en) komt u hier? (in volgorde van belangrijkheid)" rows="8" cols="70"></textarea></p>
			<p>2 Wanneer zijn uw klachten begonnen? Jaar <input type="text" name="Klachten begonnen - jaar" size="4" /> maand <input type="text" name="Klachten begonnen - maand" size="10" /></p>
			<p>3 Wat is naar uw mening de oorzaak van uw klachten?</p>
			<p><textarea name="Wat is naar uw mening de oorzaak van uw klachten" rows="8" cols="70">    </textarea></p>
			<p>4 Zijn er houdingen, bewegingen en/of andere zaken die de klachten verergeren?</p>
			<p><textarea name="Zijn er houdingen, bewegingen en/of andere zaken die de klachten verergeren?" rows="8" cols="70"></textarea></p>
			<p>5 Is er iets wat de klachten verminderd?</p>
			<p><textarea name="Is er iets wat de klachten verminderd?" rows="8" cols="70"></textarea></p>
			<p>6 Gebruikt u medicijnen? Welke? (ook de pil)</p>
			<p><textarea name="Gebruikt u medicijnen? Welke? (ook de pil)" rows="8" cols="70"></textarea></p>
			<p>7 Gebruikt u voedingssupplementen en/of volgt u een dieet?</p>
			<p><textarea name="Gebruikt u voedingssupplementen en/of volgt u een dieet?" rows="8" cols="70">    </textarea></p>
			<p>8 Bent u onder behandeling van een specialist (of geweest), en waarvoor?<br /> (Ook als dit niet in verband staat met deze klachten)</p>
			<p><textarea name="Bent u onder behandeling van een specialist (of geweest), en waarvoor?" rows="8" cols="70"></textarea></p>
			<p>9 Bent u onder behandeling van andere therapeuten, en waarvoor?</p>
			<p><textarea name="Bent u onder behandeling van andere therapeuten, en waarvoor?" rows="8" cols="70"></textarea></p>
			<p>10 Bent u wel eens ergens aan geopereerd? Zo ja, op welke leeftijd?</p>
			<p><textarea name="Bent u wel eens ergens aan geopereerd? Zo ja, op welke leeftijd?" rows="8" cols="70"></textarea></p>
			<p>11 Heeft u wel eens botten gebroken? Zo ja, op welke leeftijd?</p>
			<p><textarea name="Heeft u wel eens botten gebroken? Zo ja, op welke leeftijd?" rows="8" cols="70"></textarea></p>
			<p>12 Heeft u wel eens medische onderzoeken ondergaan (zoals bloed, darmen, R&ouml;ntgen enz.) <br /> en wat was de uitslag daarvan?</p>
			<p><textarea name="Heeft u wel eens medische onderzoeken ondergaan (zoals bloed, darmen, Röntgen enz.) en wat was de uitslag daarvan?" rows="8" cols="70"></textarea></p>
			<p>13 Werkt u, en zo ja, wat voor werk en hoe hoog is de lichamelijke belasting en psychische belasting?</p>
			<p><textarea name="Werkt u, en zo ja, wat voor werk en hoe hoog is de lichamelijke belasting en psychische belasting?" rows="8" cols="70">    </textarea></p>
			<p>14 Sport u? Welke, hoe vaak in de week en hoe lang?</p>
			<p><textarea name="Sport u? Welke, hoe vaak in de week en hoe lang?" rows="8" cols="70">    </textarea></p>
			<p>15 Heeft u nog andere hobby's?</p>
			<p><textarea name="Heeft u nog andere hobby's?" rows="8" cols="70"></textarea></p>
			<p>16 Zijn er erfelijke ziektes in de familie?</p>
			<p><textarea name="Zijn er erfelijke ziektes in de familie?" rows="8" cols="70"></textarea></p>
			<p>Beantwoord de hieronder gestelde vragen door het rondje zwart te maken in de juiste kolom. <br /> </p>
			<div id="vragenlijst">
				<p>Is uw slaappatroon de laatste tijd veranderd<span class="right"><input type="checkbox" name="Slaappatroon veranderd" /></span></p>
			</div>
			<br />
			<table width="800" border="0">
				<tbody>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Algemeen welbevinden</strong></td></tr>
					<tr><td>Is uw slaappatroon de laatste tijd veranderd</td>
						<td><input type="checkbox" name="Slaappatroon veranderd" /></td>
					</tr>
					<tr><td>Is uw eetlust veranderd</td>
						<td><input type="checkbox" name="Eetlust veranderd" /></td>
					</tr>
					<tr><td>Hebt u de laatste tijd gewicht verloren</td>
						<td><input type="checkbox" name="Gewicht verloren" /></td>
					</tr>
					<tr><td>Bent u de laatste tijd meer prikkel-gevoelig en/of stressgevoelig</td>
						<td><input type="checkbox" name="Laatste tijd stress" /></td>
					</tr>
					<tr><td>Heeft u last van pijnlijke en/of opgezette (lymfe)klieren</td>
						<td><input type="checkbox" name="Pijnlijke klieren" /></td>
					</tr>
					<tr><td>Bent u de laatste tijd sneller vermoeid</td>
						<td><input type="checkbox" name="De laatste tijd sneller vermoeid" /></td>
					</tr>
					<tr><td>Heeft u de laatste tijd net een infectie/ontsteking gehad</td>
						<td><input type="checkbox" name="De laatste tijd infectie/ontsteking gehad" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Hart/bloedvaten</strong></td></tr>
					<tr><td>Heeft u wel eens hartkloppingen</td>
						<td><input type="checkbox" name="Wel eens hartkloppingen" /></td>
					</tr>
					<tr><td>Heeft u wel eens pijn op de borst</td>
						<td><input type="checkbox" name="Pijn op de borst" /></td>
					</tr>
					<tr><td>Bent u bij/na inspanning kortademig</td>
						<td><input type="checkbox" name="Kortademig" /></td>
					</tr>
					<tr><td>Herkent u wel eens zwelling aan uw been/benen</td>
						<td><input type="checkbox" name="Zwelling been" /></td>
					</tr>
					<tr><td>Heeft u last van spataderen</td>
						<td><input type="checkbox" name="Spataderen" /></td>
					</tr>
					<tr><td>Heeft u last van koude handen/voeten</td>
						<td><input type="checkbox" name="Koude ledematen" /></td>
					</tr>
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Longen</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Urinewegen</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Spijsvertering</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Eten en drinken</strong></td></tr>
					<tr><td colspan="3">Bemerkt u verteringsproblemen bij het eten van een van de volgende produkten:</td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Zenuwstelsel</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Zintuigen</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Geopathische belasting</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Psyche/stress</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Divers</strong></td></tr>
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
					<tr><td>&nbsp;</td><td>JA</td><td width="50">&nbsp;</td></tr>
					<tr><td colspan="3"><strong>Alleen in te vullen door vrouwen</strong></td></tr>
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

