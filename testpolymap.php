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
					document.getElementById('plaats').value = '201';
				}
				var b = document.getElementById('202');
				b.onmouseover = function() {
 		 			document.getElementById('202div').style.display = 'block';
				}
				b.onmouseout = function() {
 			 		document.getElementById('202div').style.display = 'none';
				}
				b.onclick = function() {
					document.getElementById('201boekdiv').style.display = 'block';
					document.getElementById('plaats').value = '202';
				}
				var c = document.getElementById('203');
				c.onmouseover = function() {
 		 			document.getElementById('203div').style.display = 'block';
				}
				c.onmouseout = function() {
 			 		document.getElementById('203div').style.display = 'none';
				} 
				c.onclick = function() {
					document.getElementById('201boekdiv').style.display = 'block';
					document.getElementById('plaats2').value = '203';
				}				
			};

			function validateForm()
			{
				/*var mailformat=document.forms["boekform"]["email"].value;  
				if (mailformat.match(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))); 
				{  
					alert("U heeft een onjuist e-mail adres opgegeven");  
					return false;  
				} 
				*/
				
				if (match(!(/^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/.test(boekform.email.value))))	
				{
 					alert("Invalid E-mail Address! Please re-enter.")
  					return (false)
				}
				
				var allchecked=0;
				if(document.getElementById('Caravan').checked){allchecked=1;}
				if(document.getElementById('Tent').checked){allchecked=1;}
				if(document.getElementById('Camper').checked){allchecked=1;}
				if(allchecked==0){alert('Selecteer'); return false;}
				
  				var x=document.forms["boekform"]["aantal personen"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft het aantal personen op");
  					return false;
  				}
  				var x=document.forms["boekform"]["boekingsperiode"].value;

				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw boekingsperiode op");
  					return false;
  				}
  				var x=document.forms["boekform"]["boekingsperiode2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw boekingsperiode op");
  					return false;
  				}

 
  			}
			
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
   		
   		<div id="201boekdiv" style="display: block">
   		<form action= "info.php" method= "post" id="f1" name="boekform" onsubmit="return validateForm()">
			Boekingsinformatie:
				<input name="kavel" id="plaats2" style="display: block" value="123"></input>
			<br>
				Boekingsperiode: Vanaf:<input id=bp1 type="date" name="boekingsperiode" placeholder="jjjj-mm-dd" min="<?php echo date("Y-m-d") ?>">tot <input type="date" placeholder="jjjj-mm-dd" name="boekingsperiode2" min="<?php echo date("Y-m-d") ?>">
			<br>
				Aantal personen: <input type="text" name="personen" placeholder="aantal personen">
			<br>
				E-mail adres: <input type="text" name="email" placeholder="e-mail adres">
				<br>
				<input type="checkbox" id="Caravan" value="Caravan">Caravan
				<br>
				<input type="checkbox" id="Tent" value="Tent">Tent
				<br>
				<input type="checkbox" id="Camper" value="Camper">Camper
			<br>
			<input type="submit" />
		</form>
   		</div>
	</body>
</html>