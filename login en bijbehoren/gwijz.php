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
				var x=document.forms["register"]["gebruikersnaam2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe gebruikersnaam op");
  					return false;
  				}
  				var y=document.forms["register"]["password"].value;
				if (y==null || y=="")
  				{
  					alert("U heeft uw wachtwoord niet ingevult");
  					return false;
  				}
  			}
  		</script>

</head>


<body>
<form name="login" method="post" onsubmit="return validateForm()" action="wijz.php?type=1">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe gebruikersnaam:<input type="text" name="gebruikersnaam2" id="gebruikersnaam2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>