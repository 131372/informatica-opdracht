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
  					alert("U heeft uw wachtwoord niet ingevuld");
  					return false;
  				}
  			var x=document.forms["register"]["naam2"].value;
				if (x==null || x=="")
  				{
  					alert("Geef alstublieft uw nieuwe (volledige) naam op");
  					return false;
  				}
  			}
		</script>
</head>


<body>
<form name="login" method="post" action="wijz.php?type=3">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe naam(volledig):<input type="text" name="naam2" id="naam2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>