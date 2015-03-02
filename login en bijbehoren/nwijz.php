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
<form name="login" method="post" action="wijz.php?type=3">
wachtwoord:<input type="password" name="password" id="password"></input><br>
nieuwe naam(volledig):<input type="text" name="naam2" id="naam2"></input><br>
<input type="submit" name="Submit" value="wijzig">
</form>


</body>
</html>