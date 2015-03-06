<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			function validateForm()
			{
			var x=document.forms["register"]["post2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe postcode op");
  					return false;
  				}
  				 var x=document.forms["register"]["huis2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe huisnummer op");
  					return false;
  				}
  				var x=document.forms["register"]["land2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe land op");
  					return false;
  				}
  				var x=document.forms["register"]["password"].value;
				if (x==null || x=="")
  				{
  					alert("U heeft uw wachtwoord niet opgegeven");
  					return false;
  				}
  			}
  		</script>

</head>


<body>
<form name="login" method="post" action="wijz.php?type=4">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe postcode:<input type="text" name="post2" id="post2"></input><br>
nieuw huisnummer:<input type="text" name="huis2" id="huis2"></input><br>
nieuw land:<input type="text" name="land2" id="land2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>