<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<?php
			 //echo "<script> document.getElementById('plaats').innerHTML=!!!; </script>"
		?>
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
			};

			function validateForm()
			{
				var allchecked=0;
				if(document.getElementById('Caravan').checked){allchecked=1;}
				if(document.getElementById('Tent').checked){allchecked=1;}
				if(document.getElementById('Camper').checked){allchecked=1;}
				if(allchecked==0){alert('Selecteer camper, caravan en/of tent'); return false;}
				
  				var x=document.forms["boekform"]["aantal personen"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft het aantal personen op");
  					return false;
  				}

  				/*var x=document.forms["boekform"]["boekingsperiode"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw boekingsperiode op");
  					return false;
  				}
  				*/

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

>>>>>>> 0ebffb3e70a1e3ee5029a5a973f99f15ad76dcf8
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
		<div>
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
   		Plaats nr.: A <span id="plaats"> <br>
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
<<<<<<< HEAD
   		<form action= "info.php" method= "post" id="f1" name="boekform" enctype="text/plain" onsubmit="return validateForm()" method="get">
			Boekingsinformatie:
=======
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
>>>>>>> 0ebffb3e70a1e3ee5029a5a973f99f15ad76dcf8
			<br>
				Boekingsperiode: Vanaf:<input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">tot <input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen">
			<br>
				<input type="checkbox" id="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" id="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" id="Camper" value="Camper">Camper
			<br>

		</form>
   		</div>
   		<div id="202boekdiv" style="display: none">
<<<<<<< HEAD
   		<form action= "info.php" method= "post" name="boekform" enctype="text/plain" onsubmit="return validateForm(202)" method="get">
			Boekingsinformatie:
			<br>
				Boekingsperiode: Vanaf:<input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">tot <input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">
=======
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
>>>>>>> 0ebffb3e70a1e3ee5029a5a973f99f15ad76dcf8
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen">
			<br>
				<input type="checkbox" name="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" name="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" name="Camper" value="Camper">Camper
			<br>

		</form>
<<<<<<< HEAD
   		</div>   		 			
   		<div id="203boekdiv" style="display: none">
   		<form action= "info.php" method= "post" name="boekform" enctype="text/plain" onsubmit="return validateForm(203)" method="get">
			Boekingsinformatie:
=======
   		</div>
   		 			<div id="203boekdiv" style="display: none">
   		<form <form action=”info.php” method=”post”> name="contactform" enctype="text/plain" onsubmit="return validateForm()" method="get">

			Persoonlijke informatie:
			<br>
				Volledige naam: <input type="text" name="voornaam" placeholder="Achternaam - Voornaam">
			<br>
				Adres: <input type="text" name="postcode" placeholder="postcode"> 
				<input type="text" name="huisnummer" placeholder="huisnummer">
				<input type="text" name="land" placeholder="land">
>>>>>>> 0ebffb3e70a1e3ee5029a5a973f99f15ad76dcf8
			<br>
				Boekingsperiode: Vanaf:<input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">tot <input type="date" name="boekingsperiode" min="<?php echo date("Y-m-d") ?>">
			<br>
				Aantal personen: <input type="text" name="aantal personen" placeholder="aantal personen">
			<br>
				<input type="checkbox" name="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" name="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" name="Camper" value="Camper">Camper
			<br>
<<<<<<< HEAD
			<input type="submit" />
=======

>>>>>>> 0ebffb3e70a1e3ee5029a5a973f99f15ad76dcf8
		</form>
   		</div>
   		
   		
	</body>
</html>