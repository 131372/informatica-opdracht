<!DOCTYPE html>
<html>
	<head>
	<style>
		.streep{
		width:20px;
		height: 2px;
		background-color:black;
		position: absolute;
	}
	</style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<?php
			 //echo "<script> document.getElementById('plaats').innerHTML=!!!; </script>"
			 session_start();
			 require_once "db_config.php";
			 $result=query("SELECT * FROM Kavels",null,$db);
			 $i=200;
			 echo "<script> window.onload = function(){";
			 $vari=array();
			 while($row=$result->fetch()){
				$ding=array($row['Nummer'],$row['Grootte'],$row['Type'],$row['Standaard_dagprijs']);
				array_push($vari,$ding);
				 $i++;
				 $waarde = $i."div";
				echo"
				var a$i = document.getElementById('$i');
				 a$i.onmouseover = function() {
 		 			document.getElementById('$waarde').style.display = 'block';
				}
				a$i.onmouseout = function() {
 			 		document.getElementById('$waarde').style.display = 'none';
				}
				a$i.onclick = function() {
					document.getElementById('201boekdiv').style.display = 'block';
					document.getElementById('plaats2').value = '$i';
				}
				 ";
			 }
			 echo "};</script>";
			 $i=200;
		?>
		<script>
/*
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
*/
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
			
			function filter(){
				
			}
			
	</script>

	
	</head>
	<style>
<!--	
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
	-->
	</style>
	<body>
	<?php
	$iets=query("SELECT nummer,coordinaten2 from Kavels",null,$db);
	$i=200;
	while($row = $iets->fetch()){
		$i++;
		$div = explode(",",$row['coordinaten2']);
		echo "<div class='streep' style='top:",$div[1],"px;left:",$div[0],"px;' id=",$i,"></div>";
	}
	
	?>
		<div style="position:absolute;left:808px;">
			<form>
				Filter:<br>
				Type:<br>
				<input type="radio" name="type" value="comfort">Comfort<br>
				<input type="radio" name="type" value="ze">Zonder elektra<br>
				<input type="radio" name="type" value="budget">Budget<br>
				Plaatsgrootte:<br>
				<input type="radio" name="grootte" value="klein">Klein<br>
				<input type="radio" name="grootte" value="middel">Middel<br>
				<input type="radio" name="grootte" value="groot">Groot<br>
				Boekingsperiode:<br>
				Vanaf: <input type="date">tot<input type="date"><br>
				Prijs (p.p. per nacht):<br>
				min:€<input type="text">max:€<input type="text"><br>
				<input type="submit" value="filter" onsubmit="filter()">
			</form>
		</div>
		<img src="http://vakantieparksallandshoeve.nl/wp-content/gallery/camping/camping-plattegrond-2013_v1.jpg" alt="plattegrond" class="image" usemap="#me" class="map">
		<map name='me'>
       		<?php
			require_once 'db_config.php';
			try{
				$sql = "SELECT nummer,coordinaten1 from Kavels";
				$results = $db->prepare($sql);
				$results->execute();
			}	
			catch(PDOException $e){ 
   				echo '<pre>'; 
    			echo 'Regel: '.$e->getLine().'<br>'; 
    			echo 'Bestand: '.$e->getFile().'<br>'; 
    			echo 'Foutmelding: '.$e->getMessage(); 
    			echo '</pre>'; 
			}
			while($row2 = $results->fetch(PDO::FETCH_ASSOC)){
				echo "<area shape='poly' id='$row2[nummer]' class='mapping' coords='$row2[coordinaten1];'/>";	
			}
			?>
			
		</map>
<!--
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
   		-->
		<?php
		$i=200;
		$result=query("SELECT * FROM Kavels",null,$db);
		while($row=$result->fetch()){
			$i++;
			$waarde = $i."div";
			$row1 = $row['Standaard_dagprijs'];
			$row2 = $row['Type'];
			$row3 = $row['Grootte'];
			$row4 = $row['bijzonderheden'];
			if($row['Geboekt']!=1){
				$bezet="niemand heeft deze kavel nog geboekt.";
			}
			else{
				$boek=query("SELECT kavel,boekingsperiode FROM Boekingen WHERE kavel=:kavel",array(":kavel"=>$row['Nummer']),$db);
				while($row3=$boek->fetch()){
					$bezet=$bezet.$row3['boekingsperiode']."<br>";
				}
			}
			echo "
			<div id='$waarde' style='display:none;'>
			Plaats nr.: $i <br>
			Prijs (p.p. per nacht exclusief kortingen): $row1<br>
			Bezet op: $bezet<br>
			Type: $row2<br>
			Grootte: $row3<br>
			Bijzonderheden: $row4<br>
			</div>
			";
			$bezet="";
		}
		?>
   		<div id="201boekdiv" style="display: none">
   		<form action= "info.php" method= "post" id="f1" name="boekform" onsubmit="return validateForm()">
			Boekingsinformatie:
				<input name="kavel" id="plaats2" style="display: none" value="123"></input>
			<br>
				Boekingsperiode: Vanaf:<input id=bp1 type="date" name="boekingsperiode" placeholder="jjjj-mm-dd" min="<?php echo date("Y-m-d") ?>">tot <input type="date" placeholder="jjjj-mm-dd" name="boekingsperiode2" min="<?php echo date("Y-m-d") ?>">
			<br>
				Aantal personen: <input type="text" name="personen" placeholder="aantal personen">
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
		<?php
		if(isset($_SESSION['boekoverlap'])){
			if($_SESSION['boekoverlap']!=0){
				$a=$_SESSION['boekoverlap'][0];
				$b=$_SESSION['boekoverlap'][1];
				echo "uw boeking overlapt al met een andere boeking<br>";
				echo "iemand heeft deze kavel al geboek van $a tot $b";
				$_SESSION['boekoverlap']=0;
			}
		}
		?>
	</body>
</html>