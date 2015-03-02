<!doctype html>
<html>
<head>
</head>



<body>

<form name="login" method="post" action="validatelogin.php">

username:<input type="text" name="username" id="username"></input><br>
password:<input type="password" name="password" id="password"></input><br>
<input type="submit" name="Submit" value="Login">

</form>

<?php
session_start();
if(isset($_SESSION['verkeerd'])){
	if($_SESSION['verkeerd']==1){
		echo "gebruikersnaam of wachtwoord verkeerd<br>"; 
	}
}
?>
nog geen account? <br>
<a href="register.php">registreer hier</a>


</body>
</html>