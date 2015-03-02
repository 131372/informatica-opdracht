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
<form name="login" method="post" action="wijz.php?type=6">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe e-mail:<input type="text" name="mail2" id="mail2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>