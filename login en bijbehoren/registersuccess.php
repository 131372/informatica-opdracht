<!doctype html>
<html>
<head>

<?php

require_once "db_config.php";

$gebruikersnaam=$_POST['username'];
$wachtwoord=$_POST['password'];
$naam=$_POST['naam'];
$post=$_POST['postcode'];
$huis=$_POST['huisnummer'];
$land=$_POST['land'];
$tel=$_POST['telefoon'];
$mail=$_POST['e-mail'];

query("INSERT INTO login(username,password,naam,postcode,huisnummer,land,telefoon,email) VALUES ('$gebruikersnaam','$wachtwoord','$naam','$post','$huis','$land','$tel','$mail')",$db);



?>


</head>



<body>

</body>
</html>