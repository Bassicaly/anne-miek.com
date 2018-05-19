<?php
	$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
	$title = "Vragenformulier baby's";
	$description = "Vragenformulier voor baby's. Deze anamnese is belangrijk voor mij om een goed beeld van de problemen te krijgen";
	$keywords = "vragenformulier anamnese babies baby problemen";
?>

<?php
    session_start();
?>

<?php require($INC_DIR. "header.php"); ?>

<?php require($INC_DIR. "nav.php"); ?>

	<section id="content">
	<!-- START INHOUD--><form action="http://www.osteopathieamsterdam.nl/5231233formmailer.php" method="post" name="REG"><input type="hidden" name="SUBJECT" />
<p>Onderstaand treft u een groot aantal vragen aan die voor mij een waardevolle hulp zijn bij de behandeling en bijdragen tot een optimaal behandelresultaat. Elke vraag is even belangrijk en geeft inzicht in de klachten.</p>
<p>Indien u al een afspraak heeft wilt u dan hieronder?aangeven wanneer en hoe laat:</p>
<table style="width: 499px; height: 22px;" border="0">
<tbody>
<tr>
<td>?U heeft een afspraak op :</td>
<td><input type="text" name="afspraakDatum" size="30" /></td>
</tr>
<tr>
<td>?om :?</td>
<td><input type="text" name="afspraakTijd" size="30" /> uur</td>
</tr>
</tbody>
</table>
<table width="500">
<tbody>
<tr>
<td>Naam baby</td>
<td><input type="text" name="Naam" size="30" /></td>
</tr>
<tr>
<td>Naam ouders</td>
<td><input type="text" name="Naam ouders" size="30" /></td>
</tr>
<tr>
<td valign="top">Adres</td>
<td><textarea name="Adres" rows="4" cols="40"></textarea> </td>
</tr>
<tr>
<td>Telefoon priv&eacute;</td>
<td><input type="text" name="Telefoon priv?" size="30" /> </td>
</tr>
<tr>
<td>werk</td>
<td><input type="text" name="Telefoon werk" size="30" /> </td>
</tr>
<tr>
<td>mobiel</td>
<td><input type="text" name="Telefoon mobiel" size="30" /> </td>
</tr>
<tr>
<td>E-mail adres</td>
<td><input type="text" name="E-mail adres" size="30" /> </td>
</tr>
<tr>
<td>Geboortedatum baby</td>
<td><input type="text" name="Geboortedatum" size="30" /> </td>
</tr>
<tr>
<td>Geslacht baby</td>
<td>Man <input type="radio" name="Geslacht" /> Vrouw <input type="radio" name="Geslacht" /> </td>
</tr>
<tr>
<td>Huisarts</td>
<td><input type="text" name="Huisarts" size="30" /> </td>
</tr>
<tr>
<td>Hoe bent U bij ons gekomen?</td>
<td><input type="text" name="Hoe" size="30" /> </td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>1 Wat zijn de klachten van uw kind?</p>
<p><textarea name="Wat zijn de klachten van uw kind" rows="8" cols="70"></textarea></p>
<p><br /><strong>Zwangerschap</strong></p>
<p>2 Heeft u gevloeid?</p>
<p><textarea name="Heeft u gevloeid" rows="3" cols="70"></textarea></p>
<p>3 Bent u ziek geweest?</p>
<p><textarea name="Bent u ziek geweest?" rows="3" cols="70"></textarea></p>
<p>4 Heeft u veel gespuugd?</p>
<p><textarea name="Heeft u veel gespuugd?" rows="3" cols="70"></textarea></p>
<p>5 Hoe was uw bloeddruk?</p>
<p><textarea name="Hoe was uw bloeddruk?" rows="3" cols="70"></textarea></p>
<p>6 Was u vermoeid of had u juist veel energie?</p>
<p><textarea name="Was u vermoeid of had u juist veel energie?" rows="3" cols="70"></textarea></p>
<p>7 Heeft u rugklachten (gehad)?</p>
<p><textarea name="Heeft u rugklachten (gehad)?" rows="3" cols="70"></textarea></p>
<p>8 Heeft u rust moeten houden, waarom?</p>
<p><textarea name="Heeft u rust moeten houden, waarom?" rows="3" cols="70"></textarea></p>
<p>9 Had u ijzertekort?</p>
<p><textarea name="Had u ijzertekort?" rows="3" cols="70"></textarea></p>
<p>10 Heeft u stress gehad?</p>
<p><textarea name="Heeft u stress gehad?" rows="3" cols="70"></textarea></p>
<p><br /><strong>Bevalling</strong></p>
<p>11 Is dit uw eerste kind?</p>
<p><textarea name="Is dit uw eerste kind?" rows="3" cols="70"></textarea></p>
<p>12 Na hoeveel weken is uw kind geboren?</p>
<p><textarea name="Na hoeveel weken is uw kind geboren?" rows="3" cols="70"></textarea></p>
<p>13 Heeft de geboorte spontaan plaatsgevonden, of is deze ingeleid &oacute;f is uw kind met de keizersnee geboren?</p>
<p><textarea name="Heeft de geboorte spontaan plaats gevonden, is deze ingeleid of met de keizersnee geboren?" rows="3" cols="70"></textarea></p>
<p>14 Hoe was de ligging van het kind?</p>
<p><textarea name="Hoe was de ligging van het kind?" rows="3" cols="70"></textarea></p>
<p>15 Wat was de duur van de ontsluitingswee?n?</p>
<p><textarea name="Wat was de duur van de ontsluitingswee?n?" rows="3" cols="70"></textarea></p>
<p>16 Wat voor soort wee?n (buik/rug/been) heeft u gehad?</p>
<p><textarea name="Wat voor soort wee?n (buik/rug/been) heeft u gehad?" rows="3" cols="70"></textarea></p>
<p>17 Wat was de duur van de perswee?n?</p>
<p><textarea name="Wat was de duur van de perswee?n?" rows="3" cols="70"></textarea></p>
<p>18 Heeft u vruchtwater verloren v??r de perswee?n?</p>
<p><textarea name="Heeft u vruchtwater verloren v??r de perswee?n?" rows="3" cols="70"></textarea></p>
<p>19 Is het een tang- of vacuumverlossing geweest?</p>
<p><textarea name="Is het een tang- of vacuumverlossing geweest?" rows="3" cols="70"></textarea></p>
<p>20 Wat was de kleur van de baby?</p>
<p><textarea name="Wat was de kleur van de baby?" rows="3" cols="70"></textarea></p>
<p>21 Huilde uw baby direct?</p>
<p><textarea name="Huilde uw baby direct?" rows="3" cols="70"></textarea></p>
<p>22 Wat was de APGAR-score?</p>
<p><textarea name="Wat was de APGAR-score?" rows="3" cols="70"></textarea></p>
<p>23 Is de baby uitgezogen?</p>
<p><textarea name="Is de baby uitgezogen?" rows="3" cols="70"></textarea></p>
<p>24 Heeft de baby zuurstof toegediend gekregen?</p>
<p><textarea name="Heeft de baby zuurstof toegediend gekregen?" rows="3" cols="70"></textarea></p>
<p>25 Heeft de baby in een couveuze gelegen?</p>
<p><textarea name="Heeft de baby in een couveuze gelegen?" rows="3" cols="70"></textarea></p>
<p>26 Geeft u borstvoeding?</p>
<p><textarea name="Geeft u borstvoeding?" rows="3" cols="70"></textarea></p>
<p><br /><strong>Na de bevalling</strong></p>
<p>27 Is de baby geel geweest?</p>
<p><textarea name="Is de baby geel geweest?" rows="3" cols="70"></textarea></p>
<p>28 Hoe was de vorm van het hoofd?</p>
<p><textarea name="Hoe was de vorm van het hoofd?" rows="3" cols="70"></textarea></p>
<p>29 Kon de baby zelf goed op temperatuur blijven?</p>
<p><textarea name="Kon de baby zelf goed op temperatuur blijven?" rows="3" cols="70"></textarea></p>
<p>30 Hoe is het eetpatroon ('s morgens/'s middags/'s avonds)?</p>
<p><textarea name="Hoe is het eetpatroon (s'morgens/s'middags/s'avonds)?" rows="3" cols="70"></textarea></p>
<p>31 Spuugt uw baby veel?</p>
<p><textarea name="Spuugt uw baby veel?" rows="3" cols="70"></textarea></p>
<p>32 Wat eet het kind niet?</p>
<p><textarea name="Wat eet het kind niet?" rows="3" cols="70"></textarea></p>
<p>33 Hoe is het ontlastingpatroon?</p>
<p><textarea name="Hoe is het ontlastingpatroon?" rows="3" cols="70"></textarea></p>
<p>34 Kruipt het kind?</p>
<p><textarea name="Kruipt het kind?" rows="3" cols="70"></textarea></p>
<p>35 Heeft het kind operaties gehad?</p>
<p><textarea name="Heeft het kind operaties gehad?" rows="3" cols="70"></textarea></p>
<p>36 Is het kind in het ziekenhuis opgenomen geweest en zo ja, waarvoor?</p>
<p><textarea name="Is het kind in het ziekenhuis opgenomen geweest en zo ja, waarvoor?" rows="3" cols="70"></textarea></p>
<p>37 Krijgt het kind medicijnen?</p>
<p><textarea name="Krijgt het kind medicijnen?" rows="3" cols="70"></textarea></p>
<p>38 Heeft het kind vaccinaties gekregen, welke, wanneer en eventuele reacties?</p>
<p><textarea name="Vaccinaties, welke, wanneer en eventuele reacties?" rows="3" cols="70"></textarea></p>
<p>39 Heeft het kind ziektes doorgemaakt?</p>
<p><textarea name="Heeft het kind ziektes doorgemaakt?" rows="3" cols="70"></textarea></p>
<p>40 Krijgt het kind koorts bij ziekte?</p>
<p><textarea name="Krijgt het kind koorts bij ziekte?" rows="3" cols="70"></textarea></p>
<p>41 Zijn er allergie?n?</p>
<p><textarea name="Zijn er allergie?n?" rows="3" cols="70"></textarea></p>
<p>42 Heeft het kind een vorm van onrust?</p>
<p><textarea name="Heeft het kind een vorm van onrust?" rows="3" cols="70"></textarea></p>
<p>43 Slaapt het kind goed; overdag en 's nachts?</p>
<p><textarea name="Slaapt het kind goed; overdag en s'nachts?" rows="3" cols="70"></textarea></p>
<p>44 Hoe is de groeicurve van uw kind?</p>
<p><textarea name="Hoe is de groeicurve van uw kind?" rows="3" cols="70"></textarea></p>
<p>45 Hoest het kind veel?</p>
<p><textarea name="Hoest het kind veel?" rows="3" cols="70"></textarea></p>
<p align="center"><input type="submit" value="Verzenden" /></p>
<p>&nbsp;</p>
</form><!-- EINDE INHOUD-->
	</section>
	
<?php require($INC_DIR. "footer.php"); ?>

