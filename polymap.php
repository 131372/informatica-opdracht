<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script> 
			window.onload = function(){ 
				var a = document.getElementById('201');
				a.onmouseover = function() {
 		 			document.getElementById('Adiv').style.display = 'block';
				}
				a.onmouseout = function() {
 			 		document.getElementById('Adiv').style.display = 'none';
				}
				var b = document.getElementById('B');
				b.onmouseover = function() {
 		 			document.getElementById('Bdiv').style.display = 'block';
				}
				b.onmouseout = function() {
 			 		document.getElementById('Bdiv').style.display = 'none';
				}
				b.onclick = function() {
					document.getElementById('Bboekdiv').style.display = 'block';
				}
				var c = document.getElementById('C');
				c.onmouseover = function() {
 		 			document.getElementById('Cdiv').style.display = 'block';
				}
				c.onmouseout = function() {
 			 		document.getElementById('Cdiv').style.display = 'none';
				}

			};
			function validateForm()
				{
					var x=document.forms["contactform"]["voornaam"].value;
					if (x==null || x=="")
  				{
  			alert("Geef alstublieft uw volledige naam op");
  			return false;
  				}
  
  var x=document.forms["contactform"]["achternaam"].value;
if (x==null || x=="")
  {
  alert("Geef alstublieft uw achternaam op");
  return false;
  }
  var x=document.forms["contactform"]["e-mail adres"].value;
if (x==null || x=="")
  {
  alert("Geef alstublieft uw e-mail adres op");
  return false;
  }
  var x=document.forms["contactform"]["vraag"].value;
if (x==null || x=="")
  {
  alert("Why you send a mail, when you don't send any message to me?");
  return false;
  }
}

		</script>

	
	</head>
	<style>
	#Adiv {
		position: fixed;
    	top: 50px;
    	left: 1100px;
    }
	#Bdiv {
    	position: fixed;
    	top: 50px;
    	left: 1000px;
    }
    #Bboekdiv {
    	position: fixed;
    	top: 50px;
    	left: 1200px;
    }
    #Cdiv {
    	position: fixed;
    	top: 50px;
    	left: 1100px;
    }

    .image {
    	width: 900px;
    	height: 600px;
    }
	</style>
	<body>
		<div>
		<img src="http://vakantieparksallandshoeve.nl/wp-content/gallery/camping/camping-plattegrond-2013_v1.jpg" alt="plattegrond" class="image" usemap="#me" class="map">
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
				echo "<area shape='poly' id='$row[nummer]' class='mapping' coords='$row[coordinaten1];' />";
			}
			?>
   		</div>

   		<div id="Adiv" style="display: none">
   		Plaats nr.: A <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: M <br>
   		Bijzonderheden: ligt door plaats B <br>
   		</div>
   		
   		<div id="Bdiv" style="display: none">
   		Plaats nr.: B <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: XL <br>
   		Bijzonderheden: Zandloper figuur <br>
   		</div>
   		
   		<div id="Cdiv" style="display: none">
   		Plaats nr.: C <br>
   		Prijs (p.p per nacht): €genoeg <br>
   		Bezet op: (31-1 tot 10-2) <br>
   		          (24-2 tot 4-3) <br>
   		Type: Comfort <br>
   		Grootte: M <br>
   		Bijzonderheden: geen <br>
   		</div>
   		
   		<div id="Bboekdiv" style="display: none">
   		<form name="contactform" enctype="text/plain" onsubmit="return validateForm()" method="get">

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

		</form>
   		</div>
   		
   		
	</body>
</html>