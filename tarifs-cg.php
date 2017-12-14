<!DOCTYPE html>
<html>
<head>
	<title>Immat'Pro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php

include('config/dev.php');

?>

<body>

	<form action="api.php" method="post">


		<p>Votre demande : <select name="demande" value="demande"><option value=null required>Choix de la demande</option><option value=1>Changement propriétaire véhicule d'occasion</option><option value=2>Immatriculation d'un véhicule neuf</option>
			<option value=3>Demande de duplicata</option>
			<option value=4>Changement de domicile</option>
			<option value=5>Changement d'état matrimonial</option></p>
		</select>

		
		<p>Type du véhicule : 
			<select name="type" value="type">
				<option value=null required>Choix du véhicule</option>
				<?php
				for($i=0;$i<count($vehiculeTypes); $i++){
					$type = $vehiculeTypes[$i];
					echo "<option value=$i>$type</option>";
				}
				?>
			</select>
		</p>


		<p>Département du domicile : <select type="number" name="departement" value="" required/>
			<option value="01">(01) Ain </option>
			<option value="02">(02) Aisne </option>
			<option value="03">(03) Allier </option>
			<option value="04">(04) Alpes de Haute Provence </option>
			<option value="05">(05) Hautes Alpes </option>
			<option value="06">(06) Alpes Maritimes </option>
			<option value="07">(07) Ardèche </option>
			<option value="08">(08) Ardennes </option>
			<option value="09">(09) Ariège </option>
			<option value="10">(10) Aube </option>
			<option value="11">(11) Aude </option>
			<option value="12">(12) Aveyron </option>
			<option value="13">(13) Bouches du Rhône </option>
			<option value="14">(14) Calvados </option>
			<option value="15">(15) Cantal </option>
			<option value="16">(16) Charente </option>
			<option value="17">(17) Charente Maritime </option>
			<option value="18">(18) Cher </option>
			<option value="19">(19) Corrèze </option>
			<option value="2A">(2A) Corse du Sud </option>
			<option value="2B">(2B) Haute-Corse </option>
			<option value="21">(21) Côte d'Or </option>
			<option value="22">(22) Côtes d'Armor </option>
			<option value="23">(23) Creuse </option>
			<option value="24">(24) Dordogne </option>
			<option value="25">(25) Doubs </option
				><option value="26">(26) Drôme </option>
				<option value="27">(27) Eure </option>
				<option value="28">(28) Eure et Loir </option>
				<option value="29">(29) Finistère </option>
				<option value="30">(30) Gard </option>
				<option value="31">(31) Haute Garonne </option>
				<option value="32">(32) Gers </option>
				<option value="33">(33) Gironde </option>
				<option value="34">(34) Hérault </option>
				<option value="35">(35) Ille et Vilaine </option>
				<option value="36">(36) Indre </option>
				<option value="37">(37) Indre et Loire </option>
				<option value="38">(38) Isère </option>
				<option value="39">(39) Jura </option>
				<option value="40">(40) Landes </option>
				<option value="41">(41) Loir et Cher </option>
				<option value="42">(42) Loire </option>
				<option value="43">(43) Haute Loire </option>
				<option value="44">(44) Loire Atlantique </option>
				<option value="45">(45) Loiret </option>
				<option value="46">(46) Lot </option>
				<option value="47">(47) Lot et Garonne </option>
				<option value="48">(48) Lozère </option>
				<option value="49">(49) Maine et Loire </option>
				<option value="50">(50) Manche </option>
				<option value="51">(51) Marne </option>
				<option value="52">(52) Haute Marne </option>
				<option value="53">(53) Mayenne </option>
				<option value="54">(54) Meurthe et Moselle </option>
				<option value="55">(55) Meuse </option>
				<option value="56">(56) Morbihan </option>
				<option value="57">(57) Moselle </option>
				<option value="58">(58) Nièvre </option>
				<option value="59">(59) Nord </option>
				<option value="60">(60) Oise </option>
				<option value="61">(61) Orne </option>
				<option value="62">(62) Pas de Calais </option>
				<option value="63">(63) Puy de Dôme </option>
				<option value="64">(64) Pyrénées Atlantiques </option>
				<option value="65">(65) Hautes Pyrénées </option>
				<option value="66">(66) Pyrénées Orientales </option>
				<option value="67">(67) Bas Rhin </option>
				<option value="68">(68) Haut Rhin </option>
				<option value="69">(69) Rhône </option>
				<option value="70">(70) Haute Saône </option>
				<option value="71">(71) Saône et Loire </option>
				<option value="72">(72) Sarthe </option>
				<option value="73">(73) Savoie </option>
				<option value="74">(74) Haute Savoie </option>
				<option value="75">(75) Paris </option>
				<option value="76">(76) Seine Maritime </option>
				<option value="77">(77) Seine et Marne </option>
				<option value="78">(78) Yvelines </option>
				<option value="79">(79) Deux Sèvres </option>
				<option value="80">(80) Somme </option>
				<option value="81">(81) Tarn </option>
				<option value="82">(82) Tarn et Garonne </option>
				<option value="83">(83) Var </option>
				<option value="84">(84) Vaucluse </option>
				<option value="85">(85) Vendée </option>
				<option value="86">(86) Vienne </option>
				<option value="87">(87) Haute Vienne </option>
				<option value="88">(88) Vosges </option>
				<option value="89">(89) Yonne </option>
				<option value="90">(90) Territoire de Belfort </option>
				<option value="91">(91) Essonne </option>
				<option value="92">(92) Hauts de Seine </option>
				<option value="93">(93) Seine Saint Denis </option>
				<option value="94">(94) Val de Marne </option>
				<option value="95">(95) Val d'Oise </option>
				<option value="971">(971) Guadeloupe </option>
				<option value="972">(972) Martinique </option>
				<option value="973">(973) Guyane </option>
				<option value="974">(974) Réunion </option>
				<option value="975">(975) Saint Pierre et Miquelon </option>
				<option value="976">(976) Mayotte </option>
			</select></p>
			

			<p>Modele du véhicule : <select name="modele" value="modele" required>
				<option value="">Choisissez une marque</option>
				<option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
			</select></p>


			<p>Energie : <select name="energie" value="energie"><option value=null required>Choix de l'energie</option><option value=1>GO/ES</option><option value=2>EL</option>
				<option value=3>GH/GL/EH</option>
				<option value=4>GPL/GNV</option>
				<option value=5>Superéthanol</option>
				<option value=6>Biocarburants</option></p>
			</select>


			<p>CV (De 0 à 14): <input type="number" name="cv" value="" required/></p>
			<p>Immatriculation (ex : CA-758-HT): <input type="text" name="immatriculation" value="" required/></p>
			<p>Date de mise en circulation (Format 07/12/2012): <input type="date" name="circulation" value="jj-mm-aaaa" required/></p>
			<p>Co2 : <input type="number" name="co2" value=""/></p>
			<p>poids : <input type="number" name="ptac" value="0" required/></p>
			<p>Valider<input type="submit" value="OK"></p>

		</form>

	</p></p></p></form>

</body></html>

</html>