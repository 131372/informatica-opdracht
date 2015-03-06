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
				var y=document.forms["register"]["password"].value;
				if (y==null || y=="")
  				{
  					alert("Geef alstublieft uw wachtwoord op");
  					return false;
  				}
  				var x=document.forms["register"]["wachtwoord2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe wachtwoord op");
  					return false;
  				}
  				var x=document.forms["register"]["wachtwoord2"].value;
				if (x==y || x=="")
  				{
  					alert("Uw nieuwe wachtwoord is het zelfde als uw oude, kies alstublieft een andere");
  					return false;
  				}
  				
  			}
  		</script>
</head>


<body>
<form name="login" method="post" action="wijz.php?type=2">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuw wachtwoord:<input type="password" name="wachtwoord2" id="wachtwoord2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>