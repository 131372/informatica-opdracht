<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>


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