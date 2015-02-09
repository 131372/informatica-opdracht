<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script> 
			window.onload = function(){ 
				var a = document.getElementById('201');
				a.onmouseover = function() {
 		 			document.getElementById('201div').style.display = 'block';
				}
				a.onmouseout = function() {
 			 		document.getElementById('201div').style.display = 'none';
				}
				a.onclick = function() {
					document.getElementById('201boekdiv').style.display = 'block';
				}
				var b = document.getElementById('202');
				b.onmouseover = function() {
 		 			document.getElementById('202div').style.display = 'block';
				}
				b.onmouseout = function() {
 			 		document.getElementById('202div').style.display = 'none';
				}
				b.onclick = function() {
					document.getElementById('202boekdiv').style.display = 'block';
				}
				var c = document.getElementById('203');
				c.onmouseover = function() {
 		 			document.getElementById('203div').style.display = 'block';
				}
				c.onmouseout = function() {
 			 		document.getElementById('203div').style.display = 'none';
				} 
				c.onclick = function() {
					document.getElementById('203boekdiv').style.display = 'block';
				}
			};
		/*$('#f1').on('submit',functions () {

			function validateForm() {
					var x=document.forms["contactform"]["voornaam"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw volledige naam op");
  			return false;
  				}
  					var x=document.forms["contactform"]["Postcode"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw postcode op");
  			return false;
  				}
  					var x=document.forms["contactform"]["huisnummer"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw huisnummer op");
  			return false;
  				}
  					var x=document.forms["contactform"]["land"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw land op");
  			return false;
  				}
  					var x=document.forms["contactform"]["tel. nummer"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw telefoonnummer op");
  			return false;
  				}
  					var x=document.forms["contactform"]["e-mail adres"].value;
					if (x==null || x!="%@%.%")
  				{
  			alert("Geef alstublieft uw telefoonnummer op");
  			return false;
  				}
  				
			}
			});
*/
	</script>

	
	</head>
	<style>
	#201div {
		position: fixed;
    	top: 50px;
    	left: 1100px;
    }
    #201boekdiv {
    	position: fixed;
    	top: 50px;
    	left: 1200px;
    }
	#202div {
    	position: fixed;
    	top: 50px;
    	left: 1000px;
    }
    #202boekdiv {
    	position: fixed;
    	top: 50px;
    	left: 1200px;
    }
    #203div {
    	position: fixed;
    	top: 50px;
    	left: 1100px;
    }
    #203boekdiv {
    	position: fixed;
    	top: 50px;
    	left: 1200px;
    }
    .image {
    	width: 800px;
    	height: 600px;
    }
	</style>
	<body>
		<img src="http://vakantieparksallandshoeve.nl/wp-content/gallery/camping/camping-plattegrond-2013_v1.jpg" alt="plattegrond" class="image" usemap="#me" class="map">
		<map name='me'>
       		<?php
			require_once 'db_config.php';
			try{
				$sql = "SELECT nummer,coordinaten1 from Kavels";
				$result = $db->prepare($sql);
				$result->execute();
			}	
			catch(PDOException $e){ 
   				echo '<pre>'; 
    			echo 'Regel: '.$e->getLine().'<br>'; 
    			echo 'Bestand: '.$e->getFile().'<br>'; 
    			echo 'Foutmelding: '.$e->getMessage(); 
    			echo '</pre>'; 
			}
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				echo "<area shape='poly' id='$row[nummer]' class='mapping' coords='$row[coordinaten1];'/>";	
			}
			?>
		</map>

   		<div id="201div" style="display: none">
   		Plaats nr.: A <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: M <br>
   		Bijzonderheden: 201 <br>
   		</div>
   		
   		<div id="202div" style="display: none">
   		Plaats nr.: B <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: XL <br>
   		Bijzonderheden: 202 <br>
   		</div>
   		
   		<div id="203div" style="display: none">
   		Plaats nr.: C <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: M <br>
   		Bijzonderheden: 203 <br>
   		</div>
   		
   		<div id="201boekdiv" style="display: none">
   		<form action= "info.php" method= "post" id="f1" name="form201" enctype="text/plain" onsubmit="return validateForm()" method="get">

			Persoonlijke informatie:
			<br>
				Volledige naam: <input type="text" name="voornaam" placeholder="Achternaam - Voornaam">
			<br>
				Adres: <input type="text" name="postcode" placeholder="postcode"> 
				<input type="text" name="huisnummer" placeholder="huisnummer">
				<input type="text" name="land" placeholder="land">
			<br>
				Tel. nummer <input type="text" name="tel. nummer" placeholder="tel. nummer">
			<br>
				E-mail adres: <input type="text" name="e-mail adres" placeholder="e-mail adres">
			<br>
				Boekingsperiode:
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen"
			<br>
				<input type="checkbox" name="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" name="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" name="Camper" value="Camper">Camper
			<br>
			<input type="submit" />
		</form>
   		</div>
   		<div id="202boekdiv" style="display: none">
   		<form action= "info.php" method= "post" name="form202" enctype="text/plain" onsubmit="return validateForm(202)" method="get">

			Persoonlijke informatie:
			<br>
				Volledige naam: <input type="text" name="voornaam" placeholder="Achternaam - Voornaam">
			<br>
				Adres: <input type="text" name="postcode" placeholder="postcode"> 
				<input type="text" name="huisnummer" placeholder="huisnummer">
				<input type="text" name="land" placeholder="land">
			<br>
				Tel. nummer <input type="text" name="tel. nummer" placeholder="tel. nummer">
			<br>
				E-mail adres: <input type="text" name="e-mail adres" placeholder="e-mail adres">
			<br>
				Boekingsperiode: 
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen"
			<br>
				<input type="checkbox" name="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" name="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" name="Camper" value="Camper">Camper
			<br>
			<input type="submit" />
		</form>
   		</div>
   		 			<div id="203boekdiv" style="display: none">
   		<form action= "info.php" method= "post" name="form203" enctype="text/plain" onsubmit="return validateForm(203)" method="get">

			Persoonlijke informatie:
			<br>
				Volledige naam: <input type="text" name="voornaam" placeholder="Achternaam - Voornaam">
			<br>
				Adres: <input type="text" name="postcode" placeholder="postcode"> 
				<input type="text" name="huisnummer" placeholder="huisnummer">
				<input type="text" name="land" placeholder="land">
			<br>
				Tel. nummer <input type="text" name="tel. nummer" placeholder="tel. nummer">
			<br>
				E-mail adres: <input type="text" name="e-mail adres" placeholder="e-mail adres">
			<br>
				Boekingsperiode:
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen"
			<br>
				<input type="checkbox" name="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" name="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" name="Camper" value="Camper">Camper
			<br>
			<input type="submit"/>
		</form>
   		</div>
   		
   		
	</body>
</html>