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

<?php require($INC_DIR. "nav.php"); ?>

	<section id="main_section">
	<!-- START INHOUD-->
		<form action="/files/formmailer.php" method="post" name="REG"><!--- e-mail address of the person handling this form --->
			<h2>Vragenformulier</h2>
			<p>Onderstaand treft u een groot aantal vragen aan die voor mij een waardevolle hulp is bij uw behandeling en bijdragen tot een optimaal behandelresultaat. Elke vraag is even belangrijk en geeft mij inzicht in uw klachten.</p>
			<p>Indien u al een afspraak heeft wilt u dan hieronder aangeven wanneer en hoe laat:</p>
			<fieldset>
				<legend>Uw afspraak</legend>
				<label for="afspraak">U heeft een afspraak op :</label><input type="date" id="afspraak" name="afspraakDatum" size="30" /><br>
				<label for="om">om :</label><input type="time" id="om" name="afspraakTijd" size="30" /> uur<br>
			</fieldset>
			<fieldset class="personal">
				<legend>Persoonlijke informatie</legend>
				<label for="voornaam">Uw voornaam</label><input type="text" required id="voornaam" name="voornaam" size="30" placeholder="Voornaam"><br>
				<label for="achternaam">Uw achternaam</label><input type="text" required id="achternaam" name="achternaam" size="30" placeholder="Achternaam"><br>
				<label for="adres">Uw adres</label><input type="text" id="adres" name="adres" size="30" placeholder="Adres"><br>
				<label for="tel_prive">Telefoon thuis</label><input type="tel" id="tel_prive" name="tel_prive" size="30" placeholder="Telefoon prive" /><br>
				<label for="tel_werk">Telefoon werk</label><input type="tel" id="tel_werk" name="tel_werk" size="30" placeholder="Telefoon werk" /><br>
				<label for="tel_mobiel">Mobiel</label><input type="tel" id="tel_mobiel" name="tel_mobiel" size="30" placeholder="Mobiel" /><br>
				<label for="email">Email</label><input type="email" required id="email" name="email" size="30" placeholder="E-mail" /><br>
				<label for="Geboortedatum">Geboortedatum</label><input type="date"id="Geboortedatum" name="Geboortedatum" size="30" placeholder="Geboortedatum" /><br>
				<input type="radio" name="Geslacht" value="Man" /> Man <input type="radio" name="Geslacht" value="Vrouw" /> Vrouw <input type="radio" name="Geslacht" value="Anders" /> Anders<br>
				<label for="Huisarts">Huisarts</label><input type="text" id="Huisarts" name="Huisarts" size="30" placeholder="Huisarts"/> <br>
				<label for="Verwijzing">Verwijzing</label><input type="text" id="Verwijzing" name="Verwijzing" size="30" placeholder="Hoe bent u bij Osteopathie Amsterdam gekomen?"/><br>
			</fieldset>
			<fieldset class="open_vragen">
				<legend>Uw klachten</legend>
				<label for="klachten">Voor welke klacht(en) komt u hier? (in volgorde van belangrijkheid)</label>
				<textarea id="klachten" name="klachten"></textarea><br>
				<label for="wanneer">Wanneer zijn uw klachten begonnen? Maand Jaar </label><input id="wanneer" type="month" name="wanneer begonnen" /><br>
				<label for="oorzaak">Wat is naar uw mening de oorzaak van uw klachten?</label>
				<textarea id="oorzaak" name="mogelijke oorzaak"></textarea><br>
				<label for="verergeren">Zijn er houdingen, bewegingen en/of andere zaken die de klachten verergeren?</label>
				<textarea id="verergeren" name="klachten verergeren"></textarea><br>
				<label for="verminderd">Is er iets wat de klachten verminderd?</label>
				<textarea id="verminderd" name="klachten verminderd"></textarea><br>
				<label for="medicijnen">Gebruikt u medicijnen? Welke? (ook de pil)</label>
				<textarea id="medicijnen" name="medicijnen"></textarea><br>
				<label for="voedingssupplementen">Gebruikt u voedingssupplementen en/of volgt u een dieet?</label>
				<textarea id="voedingssupplementen" name="voedingssupplementen" placeholder=""></textarea><br>
				<label for="specialist">Bent u onder behandeling van een specialist (of geweest), en waarvoor?</label>
				<textarea id="specialist" name="specialist" placeholder=""></textarea><br>
				<label for="therapeuten">Bent u onder behandeling van andere therapeuten, en waarvoor?</label>
				<textarea id="therapeuten" name="therapeuten"></textarea><br>
				<label for="geopereerd">Bent u wel eens ergens aan geopereerd? Zo ja, op welke leeftijd?</label>
				<textarea id="geopereerd" name="geopereerd" placeholder=""></textarea><br>
				<label for="botten">Heeft u wel eens botten gebroken? Zo ja, op welke leeftijd?</label>
				<textarea id="botten" name="gebroken botten"></textarea><br>
				<label for="onderzoeken">Heeft u wel eens medische onderzoeken ondergaan (zoals bloed, darmen, R&ouml;ntgen enz.)<br> en wat was de uitslag daarvan?</label><br>
				<textarea id="onderzoeken" name="medische onderzoeken"></textarea><br>
				<label for="werk">Werkt u, en zo ja, wat voor werk en hoe hoog is de lichamelijke belasting en psychische belasting?</label>
				<textarea id="werk" name="werk en belasting"></textarea><br>
				<label for="sport">Sport u? Welke, hoe vaak in de week en hoe lang?</label><br>
				<textarea id="sport" name="sport"></textarea><br>
				<label for="hobby">Heeft u nog andere hobby's?</label><br>
				<textarea id="hobby" name="hobby's"></textarea><br>
				<label for="erfelijke">Zijn er erfelijke ziektes in de familie?</label><br>
				<textarea id="erfelijke" name="erfelijke ziektes"></textarea><br>
			</fieldset>
			<p>Beantwoord de hieronder gestelde vragen door aan te vinken wat van toepassing is.</p>
			<div class="checklist">
			<fieldset>
				<legend>Algemeen welbevinden</legend>
				<input type="checkbox" id="alg_slaappatroon" name="alg_slaappatroon" /><label for="alg_slaappatroon">Is uw slaappatroon de laatste tijd veranderd</label><br>
				<input type="checkbox" id="alg_eetlust" name="alg_eetlust" /><label for="alg_eetlust">Is uw eetlust veranderd</label><br>
				<input type="checkbox" id="alg_gewicht" name="alg_gewicht" /><label for="alg_gewicht">Hebt u de laatste tijd gewicht verloren</label><br>
				<input type="checkbox" id="alg_stressgevoelig" name="alg_stressgevoelig" /><label for="alg_stressgevoelig">Bent u de laatste tijd meer prikkel-gevoelig en/of stressgevoelig</label><br>
				<input type="checkbox" id="alg_klieren" name="alg_klieren" /><label for="alg_klieren">Heeft u last van pijnlijke en/of opgezette (lymfe)klieren</label><br>
				<input type="checkbox" id="alg_vermoeid" name="alg_vermoeid" /><label for="alg_vermoeid">Bent u de laatste tijd sneller vermoeid</label><br>
				<input type="checkbox" id="alg_infectie" name="alg_infectie" /><label for="alg_infectie">Heeft u de laatste tijd net een infectie/ontsteking gehad</label><br>
			</fieldset>
			<fieldset>
				<legend>Hart/bloedvaten</legend>
				<input type="checkbox" id="hart_kloppingen" name="hart_kloppingen" /><label for="hart_kloppingen">Heeft u wel eens hartkloppingen</label><br>
				<input type="checkbox" id="hart_borst" name="hart_borst" /><label for="hart_borst">Heeft u wel eens pijn op de borst</label><br>
				<input type="checkbox" id="hart_kortademig" name="hart_kortademig" /><label for="hart_kortademig">Bent u bij/na inspanning kortademig</label><br>
				<input type="checkbox" id="hart_beenzwelling" name="hart_beenzwelling" /><label for="hart_beenzwelling">Herkent u wel eens zwelling aan uw been/benen</label><br>
				<input type="checkbox" id="hart_spataderen" name="hart_spataderen" /><label for="hart_spataderen">Heeft u last van spataderen</label><br>
				<input type="checkbox" id="hart_koude_ledematen" name="hart_koude_ledematen" /><label for="hart_koude_ledematen">Heeft u last van koude handen/voeten</label><br>
			</fieldset>
			<fieldset>
				<legend>Longen</legend>
				<input type="checkbox" id="long_spataderen" name="long_spataderen" /><label for="long_spataderen">Heeft u het wel eens benauwd</label><br>
				<input type="checkbox" id="long_allergie" name="long_allergie" /><label for="long_allergie">Bent u bekend met allergie/allergie&euml;n</label><br>
				<input type="checkbox" id="long_hyperventilatie" name="long_hyperventilatie" /><label for="long_hyperventilatie">Heeft u wel eens last van hyperventilatie</label><br>
				<input type="checkbox" id="long_slijm" name="long_slijm" /><label for="long_slijm">Hoest u vaak slijm op</label><br>
				<input type="checkbox"  id="long_ontsteking" name="long_ontsteking" /><label for="long_ontsteking">Heeft u wel eens longontsteking gehad</label><br>
			</fieldset>
			<fieldset>
				<legend>Urinewegen</legend><br>
				<input type="checkbox" id="urine_pijn" name="urine_pijn" /><label for="urine_pijn">Heeft u pijn bij het plassen</label><br>
				<input type="checkbox" id="urine_ontsteking" name="urine_ontsteking" /><label for="urine_ontsteking">Heeft u wel eens een blaasontsteking gehad</label><br>
				<input type="checkbox" id="urine_drang" name="urine_drang" /><label for="urine_drang">Heeft u wel eens een drang te moeten plassen maar dat dit niet lukt</label><br>
				<input type="checkbox" id="urine_verlies" name="urine_verlies" /><label for="urine_verlies">Verliest u wel eens ongecontroleerd urine</label><br>
				<input type="checkbox" id="urine_nadruppelen" name="urine_nadruppelen" /><label for="urine_nadruppelen">voor de man: heeft u last van nadruppelen?</label><br>
				<input type="checkbox" id="urine_vaker" name="urine_vaker" /><label for="urine_vaker">Moet u in de nacht vaker dan &eacute;&eacute;n keer naar het toilet</label><br>
				<input type="checkbox" id="urine_bloed" name="urine_bloed" /><label for="urine_bloed">Heeft u wel eens bloed bij de urine</label><br>
			</fieldset>
			<fieldset>
				<legend>Spijsvertering</legend>
				<input type="checkbox" id="vertering_voedsel_allergie" name="vertering_voedsel_allergie" /><label for="vertering_voedsel_allergie">Heeft u een voedsel allergie/allergie&euml;n</label><br>
				<input type="checkbox" id="vertering_diarree" name="vertering_diarree" /><label for="vertering_diarree">Heeft u wel eens spontaan diarree (zonder ziek te zijn)</label><br>
				<input type="checkbox" id="vertering_bloed_ontlasting" name="vertering_bloed_ontlasting" /><label for="vertering_bloed_ontlasting">Heeft u wel eens bloed bij de ontlasting</label><br>
				<input type="checkbox" id="vertering_pijnlijke_stoelgang" name="vertering_pijnlijke_stoelgang" /><label for="vertering_pijnlijke_stoelgang">Heeft u een moeilijke en/of pijnlijke stoelgang</label><br>
				<input type="checkbox" id="vertering_maagpijn" name="vertering_maagpijn" /><label for="vertering_maagpijn">Bent u bekend met maagpijn/ontstekingen in de maagstreek</label><br>
				<input type="checkbox" id="vertering_oprispingen" name="vertering_oprispingen" /><label for="vertering_oprispingen">Heeft u last van oprispingen/zuurbranden</label><br>
				<input type="checkbox" id="vertering_opgeblazen" name="vertering_opgeblazen" /><label for="vertering_opgeblazen">Heeft u vaak last van een opgeblazen gevoel</label><br>
			</fieldset>
			<fieldset>			
				<legend>Eten en drinken</legend>
				<p>Bemerkt u verteringsproblemen bij het eten van een van de volgende produkten:</p>
				<input type="checkbox" id="eten_aardappelen" name="eten_aardappelen" /><label for="eten_aardappelen">Aardappelen en/of tomaten</label><br>
				<input type="checkbox" id="eten_uien" name="eten_uien" /><label for="eten_uien">Uien en/of knoflook</label><br>
				<input type="checkbox" id="eten_vlees" name="eten_vlees" /><label for="eten_vlees">Vlees</label><br>
				<input type="checkbox" id="eten_vis" name="eten_vis" /><label for="eten_vis">Vis</label><br>
				<input type="checkbox" id="eten_tarwe" name="eten_tarwe" /><label for="eten_tarwe">Tarweprodukten</label><br>
				<input type="checkbox" id="eten_zuivel" name="eten_zuivel" /><label for="eten_zuivel">Zuivelprodukten</label><br>
			</fieldset>
			<fieldset>
				<legend>Zenuwstelsel</legend>
				<input type="checkbox" id="zenuw_krachtverlies" name="zenuw_krachtverlies" /><label for="zenuw_krachtverlies">Heeft u wel eens krachtverlies in armen of benen</label><br>
				<input type="checkbox" id="zenuw_gevoelsvermindering" name="zenuw_gevoelsvermindering" /><label for="zenuw_gevoelsvermindering">Heeft u wel eens een gevoelsvermindering in armen of benen</label><br>
				<input type="checkbox" id="zenuw_duizelig" name="zenuw_duizelig" /><label for="zenuw_duizelig">Bent u vaak duizelig</label><br>
				<input type="checkbox" id="zenuw_vlekken" name="zenuw_vlekken" /><label for="zenuw_vlekken">Heeft u wel eens "vlekken" voor de ogen</label><br>
				<input type="checkbox" id="zenuw_oorsuizen" name="zenuw_oorsuizen" /><label for="zenuw_oorsuizen">Heeft u wel eens last van oorsuizingen</label><br>
				<input type="checkbox" id="zenuw_migraine" name="zenuw_migraine" /><label for="zenuw_migraine">Heeft u migraine</label><br>
				<input type="checkbox" id="zenuw_epileptisch" name="zenuw_epileptisch" /><label for="zenuw_epileptisch">Bent u epileptisch</label><br>
			</fieldset>
			<fieldset>
				<legend>Zintuigen</legend>
				<input type="checkbox" id="zintuig_watten" name="zintuig_watten" /><label for="zintuig_watten">Heeft u wel eens het gevoel op watten te lopen</label><br>
				<input type="checkbox" id="zintuig_hoofdpijn" name="zintuig_hoofdpijn" /><label for="zintuig_hoofdpijn">Heeft u vaker dan 1 keer per maand hoofdpijn</label><br>
				<input type="checkbox" id="zintuig_zicht" name="zintuig_zicht" /><label for="zintuig_zicht">Heeft u problemen met uw zicht (zien/kijken)</label><br>
				<input type="checkbox" id="zintuig_gehoor" name="zintuig_gehoor" /><label for="zintuig_gehoor">Heeft u problemen met uw gehoor</label><br>
				<input type="checkbox" id="zintuig_ruiken" name="zintuig_ruiken" /><label for="zintuig_ruiken">Heeft u problemen met ruiken</label><br>
			</fieldset>
			<fieldset>
				<legend>Geopathische belasting</legend>
				<input type="checkbox" id="geo_waterbed" name="geo_waterbed" /><label for="geo_waterbed">Heeft u een waterbed</label><br>
				<input type="checkbox" id="geo_computer" name="geo_computer" /><label for="geo_computer">Zit u vaak achter de computer</label><br>
				<input type="checkbox" id="geo_mobiel" name="geo_mobiel" /><label for="geo_mobiel">Belt u veel mobiel</label><br>
				<input type="checkbox" id="geo_hoogspanning" name="geo_hoogspanning" /><label for="geo_hoogspanning">Woont u bij/onder hoogspanningsmasten</label><br>
			</fieldset>
			<fieldset>
				<legend>Psyche/stress</legend>
				<input type="checkbox" id="psyche_concentreren" name="psyche_concentreren" /><label for="psyche_concentreren">Heeft u moeite zich te concentreren</label><br>
				<input type="checkbox" id="psyche_niet_uitgerust" name="psyche_niet_uitgerust" /><label for="psyche_niet_uitgerust">Voelt u zich niet uitgerust als u wakker wordt</label><br>
				<input type="checkbox" id="psyche_inslapen" name="psyche_inslapen" /><label for="psyche_inslapen">Heeft u problemen om in slaap te komen</label><br>
				<input type="checkbox" id="psyche_nare_dromen" name="psyche_nare_dromen" /><label for="psyche_nare_dromen">Heeft u vaak last van nare dromen</label><br>
				<input type="checkbox" id="psyche_druk_zetten" name="psyche_druk_zetten" /><label for="psyche_druk_zetten">Heeft u de neiging uzelf onder druk te zetten</label><br>
				<input type="checkbox" id="psyche_somber" name="psyche_somber" /><label for="psyche_somber">Bent u vaak somber/gedeprimeerd</label><br>
				<input type="checkbox" id="psyche_moeilijk_ontspannen" name="psyche_moeilijk_ontspannen" /><label for="psyche_moeilijk_ontspannen">Kunt u zich moeilijk ontspannen</label><br>
				<input type="checkbox" id="psyche_meditatie" name="psyche_meditatie" /><label for="psyche_meditatie">Heeft u ooit gemediteerd</label><br>
				<input type="checkbox" id="psyche_opkomen" name="psyche_opkomen" /><label for="psyche_opkomen">Heeft u het idee dat u meer voor uzelf moet opkomen</label><br>
				<input type="checkbox" id="psyche_heethoofdig" name="psyche_heethoofdig" /><label for="psyche_heethoofdig">Heeft u de neiging om snel uit uw slof te schieten</label><br>
				<input type="checkbox" id="psyche_overstuur" name="psyche_overstuur" /><label for="psyche_overstuur">Raakt u snel overstuur</label><br>
				<input type="checkbox" id="psyche_planner" name="psyche_planner" /><label for="psyche_planner">Heeft u de neiging om veel vooruit te plannen</label><br>
				<input type="checkbox" id="psyche_stemming_wissel" name="psyche_stemming_wissel" /><label for="psyche_stemming_wissel">Zijn uw stemmingen vaak wisselvallig</label><br>
				<input type="checkbox" id="psyche_controle" name="psyche_controle" /><label for="psyche_controle">Heeft u veel behoefte aan controle</label><br>
				<input type="checkbox" id="psyche_paniekerig" name="psyche_paniekerig" /><label for="psyche_paniekerig">Voelt u zich snel paniekerig en angstig</label><br>
				<input type="checkbox" id="psyche_werk_niet_aan_kunnen" name="psyche_werk_niet_aan_kunnen" /><label for="psyche_werk_niet_aan_kunnen">Heeft u het idee uw werk niet goed aan te kunnen</label><br>
				<input type="checkbox" id="psyche_niet_bij" name="psyche_niet_bij" /><label for="psyche_niet_bij">Heeft u soms het idee er niet echt bij te zijn en het leven als een film te beleven</label><br>
				<input type="checkbox" id="psyche_sociale_contacten" name="psyche_sociale_contacten" /><label for="psyche_sociale_contacten">Bent u ontevreden met uw sociale contacten</label><br>
				<input type="checkbox" id="psyche_conflict_vermijden" name="psyche_conflict_vermijden" /><label for="psyche_conflict_vermijden">Heeft u de neiging om conflicten te vermijden</label><br>
				<input type="checkbox" id="psyche_initiatief" name="psyche_initiatief" /><label for="psyche_initiatief">Heeft u het idee niet genoeg initiatieven te nemen</label><br>
				<input type="checkbox" id="psyche_negatieve_eigenschappen" name="psyche_negatieve_eigenschappen" /><label for="psyche_negatieve_eigenschappen">Bent u zich vooral bewust van uw negatieve eigenschappen</label><br>
				<input type="checkbox" id="psyche_patroon_herhalen" name="psyche_patroon_herhalen" /><label for="psyche_patroon_herhalen">Kunt u zien dat bepaalde gedragspatronen zich herhalen in uw leven</label><br>
				<input type="checkbox" id="psyche_bevestiging" name="psyche_bevestiging" /><label for="psyche_bevestiging">Heeft u het idee onvoldoende bevestiging in uw leven</label><br>
				<input type="checkbox" id="psyche_over_5_jaar" name="psyche_over_5_jaar" /><label for="psyche_over_5_jaar">Vindt u het moeilijk om zich een voorstelling te maken hoe uw leven er over 5 jaar uit ziet</label><br>
			</fieldset>
			<fieldset>
				<legend>Divers</legend>
				<input type="checkbox" id="div_gebit" name="div_gebit" /><label for="div_gebit">Heeft u problemen met uw gebit/tanden</label><br>
				<input type="checkbox" id="div_amalgaam" name="div_amalgaam" /><label for="div_amalgaam">Heeft u amalgaam vullingen/wortelkanaalbehandeling gekregen</label><br>
				<input type="checkbox" id="div_antibiotica" name="div_antibiotica" /><label for="div_antibiotica">Heeft u wel eens antibiotica of prednison gebruikt</label><br>
				<input type="checkbox" id="div_drugs" name="div_drugs" /><label for="div_drugs">Bent u verslaafd aan bv. alcohol, koffie, snoep of drugs</label><br>
				<input type="checkbox" id="div_piercings" name="div_piercings" /><label for="div_piercings">Heeft u piercings</label><br>
				<input type="checkbox" id="div_rookt" name="div_rookt" /><label for="div_rookt">Rookt u</label><br>
			</fieldset>
			<fieldset class="vrouw">
				<legend>Alleen in te vullen door vrouwen</legend>
				<input type="checkbox" id="vrouw_zwanger" name="vrouw_zwanger" /><label for="vrouw_zwanger">Bent u wel eens zwanger geweest</label><br>
				<input type="checkbox" id="vrouw_keizersnede" name="vrouw_keizersnede" /><label for="vrouw_keizersnede">Heeft u al eens een keizersnede ondergaan</label><br>
				<input type="checkbox" id="vrouw_spiraaltje" name="vrouw_spiraaltje" /><label for="vrouw_spiraaltje">Gebruikt u een spiraaltje</label><br>
				<input type="checkbox" id="vrouw_pijnlijke_menstruatie" name="vrouw_pijnlijke_menstruatie" /><label for="vrouw_pijnlijke_menstruatie">Heeft u een pijnlijke menstruatie</label><br>
				<input type="checkbox" id="vrouw_bekkeninstabiliteit" name="vrouw_bekkeninstabiliteit" /><label for="vrouw_bekkeninstabiliteit">Heeft u wel eens bekkeninstabiliteit gehad</label><br>
				<input type="radio" id="vrouw_men_12" name="menstruatie" value="voor_12" /><label for="vrouw_men_12">Was uw eerste menstruatie voor uw 12e </label><input type="radio" id="vrouw_men_15" name="menstruatie" value="na_15" /><label for="vrouw_men_15">of na uw 15e jaar</label><br>
			</fieldset>
			</div>
			<p><br> Hartelijk dank voor het invullen van deze vragenlijst. Met deze informatie zal vanzelfsprekend zorgvuldig worden omgegaan.</p>
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

