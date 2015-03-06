<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$('#plaatje').on('click',function(){
				$('#201boekdiv').hide();
			});
		});
		</script>
		<?php
			 session_start();
			 require_once "db_config.php";
			 $result=query("SELECT * FROM Kavels",null,$db);
			 $i=200;
			 echo "<script> window.onload = function(){";
			 while($row=$result->fetch()){
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
			function validateForm()
			{	
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
  				var allchecked=0;
					if(document.getElementById('Caravan').checked){allchecked=1;}
					if(document.getElementById('Tent').checked){allchecked=1;}
					if(document.getElementById('Camper').checked){allchecked=1;}
					if(allchecked==0){alert('Selecteer caravan, tent en/of camper'); return false;}
  			}
		</script>
	</head>
	<style>
    #201boekdiv {
    	position: absolute;
    	top: 50px;
    	left: 1200px;
    	width: 500px;
    	height: 300px;
    	float: left;
    }
    .image {
    	width: 800px;
    	height: 600px;
    }
	</style>
	<body>
		<div id='plaatje'>
		<img src="http://vakantieparksallandshoeve.nl/wp-content/gallery/camping/camping-plattegrond-2013_v1.jpg" alt="plattegrond" class="image" usemap="#me" class="map">
		</div>
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
				while($row3=$boek->fetch())
					$bezet=$bezet.$row3['boekingsperiode']."<br>";
				}
			}
			echo "
			<div id='$waarde' class='waardeDiv' style='display:none;'>
			Plaats nr.: $i <br>
			Prijs (p.p. per nacht exclusief kortingen): $row1<br>
			Bezet op: $bezet<br>
			Type: $row2<br>
			Grootte: $row3<br>
			Bijzonderheden: $row4<br>
			</div>
			";
			$bezet="";
		?>
   		<div id="201boekdiv" style="display: none" style="border: 1px solid">
   		<form action= "info.php" method= "post" id="f1" name="boekform" onsubmit="return validateForm()">
			Boekingsinformatie:
				<input name="kavel" id="plaats2" style="display: none" value="123"></input>
			<br>
				Boekingsperiode: Vanaf:<input id=bp1 type="date" name="boekingsperiode" placeholder="jjjj-mm-dd" min="<?php echo date("Y-m-d") ?>">tot <input type="date" placeholder="dd-mm-jjjj" name="boekingsperiode2" min="<?php echo date("Y-m-d") ?>">
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