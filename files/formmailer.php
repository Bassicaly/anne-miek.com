<?php
// regular vars
$afspraakDatum = $afspraakTijd = $datum = $naam = $adres = $tel_prive = $tel_werk = $tel_mobiel = $e_mail = $geboortedatum = $geslacht = $huisarts = $verwijzing = $klachten = $klachten_jaar = $klachten_maand = $klachten_oorzaak = $houdingen_klachten_verergeren = $houding_klachten_verminderd = $gebruik__medicijnen = $gebruik_voedingssupplementen = $behandeling_specialist = $behandeling_andere_therapeuten = $geopereerd = $gebroken_botten = $medische_onderzoeken = $werk = $sport = $hobby = $erfelijke_ziektes = "";
// start_of_boolean_vars
$slaappatroon = $eetlust = $gewicht = $stress = $pijnlijke_klieren = $sneller_vermoeid = $infectie_ontsteking = $hartkloppingen = $pijn_op_de_borst = $kortademig = $zwelling_been = $spataderen = $koude_ledematen = $benauwd = $allergie = $hyperventilatie = $hoest_slijm = $longontsteking = $pijn_bij_plassen = $blaasontsteking = $wel_drang_geen_plas = $verliest_urine = $nadruppelen = $moet_vaker_dan_1_keer = $bloed_bij_de_urine = $voedsel_allergie = $spontaan_diarree = $bloed_bij_ontlasting = $pijnlijke_stoelgang = $maagklachten = $oprispingen = $opgeblazen_gevoel = $aardappelen = $uien = $vlees = $vis = $tarweprodukten = $zuivelprodukten = $krachtsverlies_in_armen_of_benen = $gevoelsvermindering_in_armen_of_benen = $vaak_duizelig = $vlekken_voor_ogen = $oorsuizingen = $heeft_migraine = $epileptisch = $watten_lopen = $vaak_hoofdpijn = $zicht_problemen = $gehoorsproblemen = $kan_goed_ruiken = $waterbed = $zit_vaak_achter_computer = $belt_veel_mobiel = $woont_bij_hoogspanningsmasten = $moeite_met_concentreren = $wordt_niet_uitgerust_wakker = $problemen_met_in_slaap_komen = $vaak_last_van_nare_dromen = $neiging_zichzelf_onder_druk_te_zetten = $vaak_somber_gedeprimeerd = $moeilijk_ontspannen = $ooit_gemediteerd = $moet_meer_voor_uzelf_opkomen = $heeft_neiging_snel_uit_slof_te_schieten = $raakt_snel_overstuur = $plant_veel_vooruit = $wisselvallige_stemmingen = $heeft_behoefte_aan_controle = $voelt_snel_paniekerig_en_angstig = $heeft_idee_werk_niet_aan_te_kunnen = $is_er_niet_helemaal_bij = $ontevreden_over_contacten = $neiging_conflicten_te_vermijden = $niet_genoeg_initiatief = $vooral_bewust_negatieve_eigenschappen = $gedragspatronen_herhalen = $onvoldoende_bevestiging = $leven_over_5_jaar = $problemen_met_uw_gebit_tanden = $amalgaan_vullingen_wortelkanaalbehandeling_gekregen = $wel_eens_antibiotica_of_prednison_gebruikt = $verslaafd_aan_bv_alchohol_koffie_snoep_of_drugs = $heeft_piercings = $rookt = $wel_eens_zwanger_geweest = $al_eens_een_keizersnede_ondergaan = $gebruikt_een_spiraaltje = $heeft_een_pijnlijke_menstruatie = $wel_eens_bekkeninstabiliteit_gehad = $menstruatie_voor_12e = $menstruatie_na_15e = "";
?>

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
Welcome <?php echo $_POST["Naam"]; ?><br>
Your email address is: <?php echo $_POST["E-mail"]; ?><br>
<br>
And this is hopefully all the POST data:<br>
<?php print_r($_POST); ?>
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
