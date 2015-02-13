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
<a href="gwijz.php">gebruikersnaam wijzigen</a>
<a href="wwijz.php">wachtwoord wijzigen</a>
<a href="nwijz.php">naam wijzigen</a>
<a href="awijz.php">adres wijzigen</a>
<a href="twijz.php">telefoonnummer wijzigen</a>
<a href="ewijz.php">e-mail wijzigen</a>

 

</body>
</html>