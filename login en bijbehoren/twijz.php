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
<form name="login" method="post" action="wijz.php?type=5">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuw telefoonnummer:<input type="text" name="telefoon2" id="telefoon2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>