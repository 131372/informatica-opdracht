<!doctype html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			function validateForm()
			{
				var x=document.forms["register"]["username"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw gebruikersnaam op");
  					return false;
  				}
  				var y=document.forms["register"]["password"].value;
				if (y==null || y=="")
  				{
  					alert("Geef alstublieft uw wachtwoord op");
  					return false;
  				}
  				var x=document.forms["register"]["password2"].value;
				if (x==null || x=="")
  				{
  					alert("Verifieer alstublieft uw wachtwoord");
  					return false;
  				}
  				var x=document.forms["register"]["password2"].value;
				if (x!=y || x=="")
  				{
  					alert("Uw geverifieerde wachtwoord komt niet overeen met uw opgegeven wachtwoord");
  					return false;
  				}
  				var x=document.forms["register"]["naam"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw naam op");
  					return false;
  				}
  				var x=document.forms["register"]["postcode"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw postcode op");
  					return false;
  				}
  				 var x=document.forms["register"]["huisnummer"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw huisnummer op");
  					return false;
  				}
  				var x=document.forms["register"]["land"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw land op");
  					return false;
  				}
  				var x=document.forms["register"]["telefoon"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw telefoonnummer op");
  					return false;
  				}
  				if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(register.email.value)))
				{
 					alert("U heeft geen of een onjuist e-mail adres opgegeven");
					return (false);
				}
			}
		</script>				
	</head>
	<body>
		<form name="register" method="post" onsubmit="return validateForm()" action="registersuccess.php">
			gebruikersnaam:<input type="text" name="username" id="username"></input><br>
			wachtwoord:<input type="password" name="password" id="password"></input><br>
			verifieer wachtwoord:<input type="password" name="password2" id="password2"></input><br>
			volledige naam:<input type="text" name="naam" id="naam"></input><br>
			postcode:<input type="text" name="postcode" id="postcode"></input><br>
			huisnummer:<input type="text" name="huisnummer" id="huisnummer"></input><br>
			land:<input type="text" name="land" id="land"></input><br>
			telefoonnummer:<input type="text" name="telefoon" id="telefoon"></input><br>
			e-mail:<input type="text" name="email" id="email"></input><br>
			<input type="submit" name="Submit" value="Register"><br>
			heb je al een account?
			<a href="login.php">log hier in</a>
		</form>


</body>
</html>