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
			var x=document.forms["register"]["password"].value;
				if (x==null || x=="")
  				{
  					alert("U heeft uw wachtwoord niet opgegeven");
  					return false;
  				}
			if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(register.email.value)))
				{
 					alert("U heeft geen of een onjuist nieuw e-mail adres opgegeven");
					return (false);
				}
			}
			
		</script>

</head>

<body>
<form name="login" method="post" action="wijz.php?type=6">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe e-mail:<input type="text" name="mail2" id="mail2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>